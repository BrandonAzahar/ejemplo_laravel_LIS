seccion para crear libros

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">investigacion aplicada 3-UDB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
    
        <a class="btn btn-success" href="{{url('libros/create')}}">ingresar libro</a>
        <a class="btn btn-dark" href="{{url('libros')}}">inicio</a>
       
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">----</a>
      </div>
    </div>
  </div>
</nav>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>



<div class="container">

<form action="{{url('/libros')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">{{'nombre'}}</label>
  <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="nombre">
</div>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">{{'genero'}}</label>
  <input type="text" name="genero" id="genero" class="form-control"  placeholder="genero">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">{{'autor'}}</label>
  <input type="text" name="autor" id="autor" class="form-control"  placeholder="autor">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">{{'editorial'}}</label>
  <input type="text" name="editorial" id="editorial" class="form-control"  placeholder="editorial">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">{{'isbm'}}</label>
  <input type="text" name="isbm" id="isbm" class="form-control"  placeholder="isbm">
</div>




<input  class="btn btn-success" type="submit" value="agregar">
<a  class="btn btn-danger" href="{{url('libros')}}" onclick="return confirm('¿cancelar?')" >cancelar</a>

</div>




</form>