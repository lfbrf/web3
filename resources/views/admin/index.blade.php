@extends('admin2.layout.admin')
@section('content')
    <h3>Admin</h3>
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.5 CRUD Example from Scratch</h2>
            </div> 
            <div class="pull-right">                       
                <a class="btn btn-success" href="{{ route('immobile.create') }}"> Create New immobile</a>    
            </div>
        </div>
    </div>


    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<div class="row">


 <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Category</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New</h4>
                </div>
                {!! Form::open(['route' => 'operations.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Title') }}
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
    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr> 
            <th>No</th>
            <th>Endereco</th> 
            <th>Cep</th>
            <th>Comodos</th>
            <th>Area</th>
            <th>Preco</th>
            <th>Descricao</th>
            <th>Acoes</th>
           
        </tr>
    @foreach ($immobiles as $immobile)

    <tr>
        <td>{{ ++$i }}</td> 
         
            <td>Endereco: {{$immobile->state}}, {{ $immobile->city}}, {{ $immobile->neighborhood}}, {{ $immobile->number}} </td>
            <td > CEP: {{ $immobile->cep}}</td>
                <td >Numero de comodos:  {{ $immobile->bedroom}}</td>
            
                <td>Total de area:  {{ $immobile->area}} </td>
                <td >Valor:  {{ $immobile->value}} </td>
            <td > Descricao:  {{ $immobile->description}} </td>
            
        <td style="width:202px !important;">
            <a class="btn btn-info" href="{{ route('immobile.show',$immobile->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('immobile.edit',$immobile->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['immobile.destroy', $immobile->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table> 



@endsection
