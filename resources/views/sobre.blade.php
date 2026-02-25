@extends('layouts.home')

@section('title', 'CAÇAROLA cars')

@section('content')

<section class="py-5 bg-light">
  <div class="container">
    
    <div class="text-center mb-5">
      <h2 class="fw-bold">Sobre Nós</h2>
      <p class="text-muted">Conheça mais sobre a nossa concessionária</p>
    </div>

    <div class="row align-items-center">
      
      <!-- Texto -->
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Tradição, Confiança e Qualidade</h4>
        <p>
          Há anos no mercado automotivo, nossa concessionária oferece veículos novos e seminovos
          com procedência garantida. Trabalhamos com transparência e compromisso para garantir
          a melhor experiência na hora de adquirir seu veículo.
        </p>
        <p>
          Nossa equipe está preparada para oferecer atendimento personalizado,
          ajudando você a encontrar o carro ideal com segurança e as melhores condições.
        </p>

        <a href="#contato" class="btn btn-dark mt-3">Fale Conosco</a>

    </div>

    <!-- Diferenciais -->
    <div class="row mt-5 text-center">
      
      <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-shield-check fs-1 text-dark"></i>
          <h6 class="mt-3 fw-bold">Garantia</h6>
          <p class="text-muted small">Veículos revisados e com garantia.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-cash-coin fs-1 text-dark"></i>
          <h6 class="mt-3 fw-bold">Financiamento</h6>
          <p class="text-muted small">Facilidade no pagamento.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-arrow-repeat fs-1 text-dark"></i>
          <h6 class="mt-3 fw-bold">Troca Justa</h6>
          <p class="text-muted small">Avaliação justa do seu usado.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-people fs-1 text-dark"></i>
          <h6 class="mt-3 fw-bold">Atendimento</h6>
          <p class="text-muted small">Equipe especializada e atenciosa.</p>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection