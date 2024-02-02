<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')

<!-- Inyectamos el texto que contiene el título en el yield "title" -->

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')

<h1>hola este es mi formulario</h1>
<form method="POST" action="/products" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del producto">
    </div>
    <div class="form-group">
        <label for="price">Precio</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Precio del producto">
    </div>
    <div class="form-group">
        <label for="image">Imagen del producto</label>
        <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png" placeholder="Imagen del producto">
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>

</form>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection
