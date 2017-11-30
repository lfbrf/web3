@extends('admin.layout.admin')
@section('content')

<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 <div class="navbar">
        <a class="navbar-brand" href="#">Categories =></a>

<ul class="nav navbar-nav">
            @if(!empty($ops))
            @forelse($ops as $operation)
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
 <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Adicionar Operação</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
                <h2<Add New Immobile</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('immobile.index') }}"> Back</a>
            </div>
        </div> 
    </div>

    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'immobile.store','method'=>'POST')) !!}
         @include('admin.immobile.form')
    {!! Form::close() !!}

@endsection  