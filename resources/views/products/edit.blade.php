<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')

<h1>Formulario de edicion de producto</h1>
<div class="d-flex">
    <form style="display: flex; flex-direction: column; align-items: center; padding: 20px; width: 100%;" method="POST" action="/products/{{ $viewData['producto']['id'] }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input style="max-width: 200px;" type="text" name="name" value="{{ $viewData['producto']['name'] }}">
        <input style="max-width: 200px;" type="text" name="price" value="{{ $viewData['producto']['precio'] }}">
        <input style="max-width: 200px;" type="text" name="description" value="{{ $viewData['producto']['description'] }}">
        <label style="max-width: 200px; margin-top: 30px; font-weight: bold;" for="url">Imagen Actual</label>
        <img style="max-width: 200px;" src="{{ asset('storage/' . $viewData['producto']['url']) }}" class="img-fluid rounded" style="width: 500px;">
        <input style="max-width: 200px;" type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png" placeholder="Imagen del producto">
        <label for="deleteImage">Eliminar imagen</label> <input name="deleteImage" type="checkbox">
        <input style="max-width: 200px; margin-top: 30px;" type="submit" value="Editar">
    </form>
</div>
@endsection
