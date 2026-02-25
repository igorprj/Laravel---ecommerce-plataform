@extends('layouts.home')

@section('title', 'Criar um Produto')

@section('content')



<div id="product-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Produtos</h1>
    <form action="/welcome" method="post" enctype="multipart/form-data">
        @csrf

        <label for="image">Imagem do Produto:</label>
        <input type="file" id="image" name="image" class="form-control-file" placeholder="imagem do Produto" required>
        <div class="form-group">
            <label for="title">Nome do Produto:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nome do Produto" required>
        </div>
        <div class="form-group">
            <label for="title">Quantidade:</label>
            <input type="text" id="qty" name="qty" class="form-control" placeholder="Quantidade do Produto" required>
        </div>
        <div class="form-group">
            <label for="title">Preço:</label>
            <input type="text" id="price" name="price" class="form-control" placeholder="Preço do Produto" required>
        </div>
        <div class="form-group">
            <label for="title">Descrição do Produto:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do produto"></textarea>
        </div>

        <div class="mb-4">
            <label for="category" class="form-label fw-semibold">
                Categoria do Veículo
            </label>

            <select name="category" id="category" class="form-select shadow-sm rounded-3" required>
                <option value="" disabled selected>Selecione uma categoria</option>
                <option value="Esportivo">🏎️ Esportivo</option>
                <option value="SUV">🚙 SUV</option>
                <option value="Sedan">🚘 Sedan</option>
                <option value="Hatch">🚗 Hatch</option>
                <option value="Pickup">🛻 Pickup</option>
                <option value="Luxo">💎 Luxo</option>
            </select>

            <div class="form-text">
                Escolha a categoria correta do veículo.
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Criar Produto">
        </div>

    </form>
</div>

@endsection