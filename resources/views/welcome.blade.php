@extends('layouts.home')

@section('title', 'CAÇAROLA cars')

@section('content')

<style>
  .carousel-item img {
    height: 500px;
    object-fit: cover;
    transition: 0.6s ease;
  }

  .carousel-item img:hover {
    transform: scale(1.03);
  }

  .carousel {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
  }

  .card {
    border: none;
    border-radius: 18px;
    transition: 0.4s ease;
    animation: fadeUp 0.8s ease forwards;
    opacity: 0;
  }

  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  }

  .card-img-top {
    border-top-left-radius: 18px;
    border-top-right-radius: 18px;
    height: 220px;
    object-fit: cover;
    transition: 0.4s ease;
  }

  .card:hover .card-img-top {
    transform: scale(1.05);
  }

  @keyframes fadeUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .transition-btn {
    transition: 0.3s ease;
  }

  .transition-btn:hover {
    transform: scale(1.08)
  }


  .card-img-top {
    height: 220px;
    object-fit: cover;
  }

  @media (max-width: 576px) {
    .card-img-top {
      height: 180px;
    }
  }
</style>

<div id="myCarousel" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/Gemini_Generated_Image_au3itfau3itfau3i.png"
        alt="" class="img-fluid w-100 h-100">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/Gemini_Generated_Image_au3itfau3itfau3i.png" alt="" class="img-fluid w-100 h-100">
      <div class="container">
        <div class="carousel-caption text-end">
          </p>
        </div>
      </div>
    </div>
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#myCarousel"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#myCarousel"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<section class="py-5">

  <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
      @foreach ($produtos as $produto )
      <div class="col mb-5">
        <div class="card h-100">
          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
          <!-- Product image-->
          <img class="card-img-top" style="width: 100%;" src="imagens/produtos/{{ $produto->image }}" alt="" />
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">{{ $produto->name }}</h5>
              <!-- Product price-->
              R${{ $produto->price }}
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-dark rounded-pill px-4 mt-auto transition-btn" href="/Produtos/{{ $produto->id }}">Ver mais</a></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

</section>

@endsection