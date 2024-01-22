<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')

<div class="d-flex">
    <img src="{{ asset($viewData['producto']['img']) }}" class="img-fluid rounded" style="width: 500px;">
    <div style="display: flex; flex-direction: column; align-items: flex-start;">
        <div>
            {{ $viewData['producto']['nombre'] }} (${{ $viewData['producto']['precio'] }})
        </div>
        <div>
            {{ $viewData['producto']['descripcion'] }}
        </div>
        <button style="border: none; margin-top: 50px;">Add to cart</button>
    </div>
</div>
@endsection
