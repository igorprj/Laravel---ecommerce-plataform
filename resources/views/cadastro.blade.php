<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 420px; border-radius: 15px;">

        <div class="text-center mb-4">
            <h3 class="fw-bold">Criar Conta</h3>
            <p class="text-muted mb-0">Cadastre-se para continuar</p>
        </div>

        <form method="POST" action="{{ route('cadastro') }}">
            @csrf

            <!-- Nome -->
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       placeholder="Digite seu nome"
                       required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Digite seu e-mail"
                       required>
            </div>

            <!-- Senha -->
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Crie uma senha"
                       required>
            </div>

            <!-- Confirmar Senha -->
            <div class="mb-3">
                <label class="form-label">Confirmar Senha</label>
                <input type="password"
                       name="password_confirmation"
                       class="form-control"
                       placeholder="Repita sua senha"
                       required>
            </div>

            <!-- Botão -->
            <button type="submit" class="btn btn-dark w-100 mt-2 ">
                Criar Conta
            </button>

            @if ($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                    @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            
            @endif

        </form>

        <div class="text-center mt-3">
            <small>
                Já tem conta?
                <a href="{{ route('login') }}" class="text-decoration-none">
                    Entrar
                </a>
            </small>
        </div>

    </div>

</div>

</body>
</html>