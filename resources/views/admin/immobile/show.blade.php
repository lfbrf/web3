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


 


<ul class="container">
@php ($b = 0)
    <li class="row">
    <div class="content" >

    <h1>{{ $immobile->title}}</h1> 
    <table>

            <tr>

           
            <td>Endereco: {{$immobile->state}}, {{ $immobile->city}}, {{ $immobile->neighborhood}}, {{ $immobile->number}} </td>
            <td > CEP: {{ $immobile->cep}}</td>
            </tr>
            <tr>
       
                <td >Numero de comodos:  {{ $immobile->bedroom}}</td>
            </tr>
            <tr>
                <td>Total de area:  {{ $immobile->area}} </td>
                <td >Valor:  {{ $immobile->value}} </td>
            </tr>
            <tr> <td > Descricao:  {{ $immobile->description}} </td>
            </tr>
    </table> 
   
    </div>
    
@php ($b ++)
@php ($a = 0)
@php ($c = 0)

<div id="myCarousel{{$b}}" class="carousel slide" data-ride="carousel" style="width: 30%;" >
  <!-- Indicators -->
  <ol class="carousel-indicators">

     @foreach ($immobile->images as $image)  
     
    <li data-target="#myCarousel{{$b}}" data-slide-to="{{$a}}"></li>
     @php ($a ++)
     @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >

    

  @foreach ($immobile->images as $image)
  @if ($c == 0)
    <div class="item active">
      <img src="{{$image->image_path}}" style="height: 40%; width: 100%;"  alt="New York">
    </div>
    @php ($c++)
  @else

    <div class="item">
      <img src="{{$image->image_path}}" style="height: 40%; width: 100%;"  alt="New York">
    </div> 
  @endif
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

 <div class="col-md-6">
            <h3> Adicione imagens do imóvel.</h3>
        
            <form action="/admin/immobile/image-upload/{{$immobile->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$immobile->id}}">
              {{csrf_field()}}

             </form> 

        </div>
        
       <div class="col-md-10" style="float:left;" >
        @foreach ($immobile->images as $image)

  
          <img src="{{$image->image_path}}" style="width: 25%; height: 25%;">
          
        @endforeach
        </div>
   <div class="col-md-10" style="float:left;" >  
   <a href="{{route('immobile.edit',$immobile->id)}}" class="btn btn-primary btn-sm " style="margin-right: 65%;">Editar Imóvel</a>
      <br>
        
        <form action="{{route('immobile.destroy',$immobile->id)}}"  method="POST" style="margin-right: 65%;">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Deletar">
         </form>        
    </div>
        </div>
 
   

  


</ul>





  

@endsection