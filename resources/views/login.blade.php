<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px; border-radius: 15px;">

        <div class="text-center mb-4">
            <h3 class="fw-bold">Entrar</h3>
            <p class="text-muted mb-0">Acesse sua conta</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

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
                       placeholder="Digite sua senha"
                       required>
            </div>

            <!-- Botão -->
            <button type="submit" class="btn btn-dark w-100 mt-2">
                Entrar
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
                Não tem conta? 
                <a href="{{ route('cadastro') }}" class="text-decoration-none">
                    Criar conta
                </a>
            </small>
        </div>

    </div>

</div>

</body>
</html>