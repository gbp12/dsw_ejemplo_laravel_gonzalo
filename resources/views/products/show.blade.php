<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')

<div class="d-flex">
    <img src="{{ asset('storage/' . $viewData['producto']['url']) }}" class="img-fluid rounded" style="width: 500px;">
    <div style="display: flex; flex-direction: column; align-items: flex-start;">
        <h2>
            {{ $viewData['producto']['name'] }} (${{ $viewData['producto']['precio'] }})
        </h2>
        <div>
            {{ $viewData['producto']['description'] }}
        </div>
        <button style="border: none; margin-top: 50px;">Añadir al carrito</button>
        <a href="/products/{{ $viewData['producto']['id'] }}/edit" style="border: none; margin-top: 50px;">Editar articulo</a>
        <form action="/products/{{ $viewData['producto']['id'] }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" style="border: none; margin-top: 50px; background: none; color: red; text-decoration: underline; cursor: pointer;">Eliminar artículo</button>
        </form>
    </div>
</div>
@endsection
