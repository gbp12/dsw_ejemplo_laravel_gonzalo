<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')

<div class="row">

    @foreach ($viewData['productos'] as $producto)
    <div class="col-md-6 col-lg-4 mb-2">
        <a style="text-decoration: none;" href="/products/{{$producto['id']}}">
            <img src="{{ asset('storage/' . $producto['url']) }}" class="img-fluid rounded">


            <h4 style="color: #242424;" class="text-center">{{$producto['name']}}</h4>
            <h4 style="color: #242424;" class="text-center">{{$producto['precio']}}</h4>
            <h4 style="color: #242424;" class="text-center">{{$producto['url']}}</h4>
        </a>
    </div>
    @endforeach

</div>
@endsection
