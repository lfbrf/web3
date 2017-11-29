@extends('admin2.layout.admin')
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
<!-- tabela
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.5 CRUD Example from Scratch</h2>
            </div> 
            <div class="pull-right">                      
                <a class="btn btn-success" href="{{ route('admin.immobile.create') }}"> Create New immobile</a>    
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th> 
            <th>Body</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($immobiles as $immobile)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $immobile->title}}</td>
        <td>{{ $immobile->body}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('immobiles.show',$immobile->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('immobiles.edit',$immobile->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['immobiles.destroy', $immobile->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
-->









<h3>Products</h3>


<ul class="container">
@php ($b = 0)
    @forelse($immobiles as $immobile)

{{dd($immobile->operation)}}

    <li class="row">
    <div class="content" style="float: right; word-wrap:break-word; max-width:50%;">
    <p>---------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>{{ $immobile->title}}</h2> 
    </div>
    
@php ($b ++)
@php ($a = 0)

<div id="myCarousel{{$b}}" class="carousel slide" data-ride="carousel" style="width: 50%; float: left;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel{{$b}}" data-slide-to="0" class="active"></li>
     @foreach ($immobile->images as $image)  
      @php ($a ++)
    <li data-target="#myCarousel{{$b}}" data-slide-to="{{$a}}"></li>
     @endforeach
      @php ($a ++)
     <li data-target="#myCarousel{{$b}}" data-slide-to="{{$a}}"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/JPEG_example_JPG_RIP_100.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/JPEG_example_JPG_RIP_100.jpg" alt="Chicago">
    </div>
  @foreach ($immobile->images as $image)
    <div class="item">
      <img src="{{$image->image_path}}" style="height: 50%; width: 100%;"  alt="New York">
    </div> 
    @endforeach
  </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel{{$b}}" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel{{$b}}" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  
        
       <div class="col-md-8" style="float:left;">
        @foreach ($immobile->images as $image)

  
          <img src="{{$image->image_path}}" style="max-width: 100px">
          
        @endforeach
        </div>
      <a href="{{route('immobiles.edit',$immobile->id)}}" class="btn btn-primary btn-sm ">Edit Product</a>
      <br>










        <form action="{{route('immobiles.destroy',$immobile->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Delete">
         </form>

         <div class="col-md-4">
            {{{$immobile->id}}}
            <form action="/immobiles/image-upload/{{$immobile->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$immobile->id}}">
              {{csrf_field()}}

             </form> 

        </div>

   

          
        @empty

        <h3>No produtcs</h3>


    @endforelse
</ul>






    {!! $immobiles->links() !!}

@endsection