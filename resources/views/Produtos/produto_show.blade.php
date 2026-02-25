@extends('layouts.home')

@section('title', $product->title)

@section('content')


<style>
.product-card {
    border-radius: 20px;
    overflow: hidden;
    transition: 0.4s ease;
    animation: fadeInUp 0.8s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.product-img {
    border-radius: 20px;
    transition: 0.4s ease;
}

.product-img:hover {
    transform: scale(1.05);
}

.price-tag {
    font-size: 2rem;
    font-weight: bold;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<div class="container py-5">

    <div class="card product-card shadow-lg border-0">
        <div class="row g-0">

            {{-- IMAGEM --}}
            <div class="col-md-6 p-4 text-center">
                <img src="{{ asset('imagens/produtos/' . $product->image) }}"
                     class="img-fluid product-img"
                     alt="{{ $product->name }}">
            </div>

            {{-- INFORMAÇÕES --}}
            <div class="col-md-6 p-5 d-flex flex-column justify-content-center">

                {{-- Categoria --}}
                <span class="badge bg-dark mb-3 w-auto px-3 py-2">
                    {{ $product->category }}
                </span>

                {{-- Nome --}}
                <h2 class="fw-bold mb-3">
                    {{ $product->name }}
                </h2>

                {{-- Preço --}}
                <div class="price-tag text-success mb-3">
                    R$ {{ number_format($product->price, 2, ',', '.') }}
                </div>

                {{-- Quantidade --}}
                <p class="text-muted">
                    Estoque disponível: {{ $product->qty }}
                </p>

                {{-- Descrição --}}
                <p class="mt-3">
                    {{ $product->description }}
                </p>

                {{-- Botões --}}
                <div class="mt-4">
                    <a href="#" class="btn btn-dark btn-lg rounded-pill px-4 me-2">
                        Comprar Agora
                    </a>

                    <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-lg rounded-pill px-4">
                        Voltar
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
