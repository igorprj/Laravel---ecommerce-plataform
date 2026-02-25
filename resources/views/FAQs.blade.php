@extends('layouts.home')

@section('title', 'CAÇAROLA cars')

@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Perguntas Frequentes</h2>
            <p class="text-muted">Tire suas dúvidas sobre a CacarolaCars</p>
        </div>

        <div class="accordion shadow rounded-4" id="faqAccordion">

            <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-semibold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1">
                        🚗 Como funciona a compra de veículos?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse"
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Você pode escolher o veículo no catálogo, entrar em contato conosco
                        e finalizar a negociação com total segurança.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-semibold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2">
                        💳 Quais formas de pagamento são aceitas?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse"
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Aceitamos financiamento, cartão, PIX e pagamento à vista.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-semibold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq3">
                        🛡️ Os veículos possuem garantia?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse"
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sim! Trabalhamos apenas com veículos revisados e com garantia.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>    

@endsection
