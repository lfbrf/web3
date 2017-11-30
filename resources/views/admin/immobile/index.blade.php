<p style="display:none"> {{ $i = 0 }}</p>
@extends('admin.layout.admin')

    <title>Image Gallery Example</title>
    <!-- Latest compiled and minified CSS -->
 
<script>
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
}); 
</script>



@section('content')


 <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Listagem das Operações</h4>
             <ul class="nav navbar-nav">
            @if(!empty($operations))
            @forelse($operations as $operation)
                <li class="active">
                    <a href="{{route('operations.show',$operation->id)}}">{{$operation->name}}</a>
{{-- delete button --}}
                    <form action="{{route('operations.destroy',$operation->id)}}"  method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                     </form>

                </li>
            @empty
                <li>No Items</li>
            @endforelse
                @endif

        </ul>  
            </div>
              
                <div class="modal-header">
                    
                    <h4 class="modal-title">Adicionar Nova</h4>
                </div>
                {!! Form::open(['route' => 'operations.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Titulo') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div> 
 
 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!! Form::close() !!}

              
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
 
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Seja Bem vindo Administrador</h1>
            </div> 
            
            <div class="pull-right">                      
                <a class="btn btn-success" href="{{ route('immobile.create') }}">Adicionar Um imóvel</a>    
            </div>
        </div>
    </div>
    <div class="pull-left">
                <h3>Controle De imóveis</h3>
            </div> 
<div class="panel-body">
        <!--
            <form method="GET" action="{{ route('immobile-lists') }}">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="titlesearch" class="form-control" placeholder="Busque um imóvel por uma palavra chave" value="{{ old('titlesearch') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn btn-success">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
            -->
      </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@foreach ($immobiles as $immobile)
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Operação</th>
            <th>Titulo</th> 
            <th>Endereco Completo</th>
            <th>Tipo</th>
            <th>Cep</th>

            <th width="280px">Action</th>
        </tr>
    <tr>
    
        <td>{{ ++$i }}</td>
        <td> @foreach ($operations as $operation)
    @if($immobile->operation_id == $operation->id)
    {{$operation->name }}
    @endif
    @endforeach</td>
        <td>{{ $immobile->title}}</td>
        <td>{{ $immobile->state}},{{ $immobile->city}},{{ $immobile->neighborhood}},{{ $immobile->number}} </td>
        <td>{{ $immobile->type}}</td>
        <td>{{ $immobile->cep}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('immobile.show',$immobile->id) }}">Mostrar</a>
            <a class="btn btn-primary" href="{{ route('immobile.edit',$immobile->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['immobile.destroy', $immobile->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
  {{ $immobiles->links() }}
@endsection
