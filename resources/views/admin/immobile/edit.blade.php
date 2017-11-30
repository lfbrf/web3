@extends('admin.layout.admin')
@section('content')

<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<div class="row">


 <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Adicionar Operação</a>
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
                        {{ Form::label('name', 'Informe a Operação') }}
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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2<Add New Immobile</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('immobile.index') }}"> Voltar</a>
            </div>
        </div> 
    </div>
<div class="col-md-4">
            <h3> Adicione imagens do imóvel.</h3>
        
            <form action="/admin/immobile/image-upload/{{$immobile->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$immobile->id}}">
              {{csrf_field()}}

             </form> 

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
    {!! Form::model($immobile,['route' => ['immobile.update',$immobile->id], 'method' => 'PUT', 'files' => true]) !!}
         @include('admin.immobile.form')
    {!! Form::close() !!}

@endsection  