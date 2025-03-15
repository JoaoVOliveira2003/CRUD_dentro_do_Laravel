<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Marca</title>
</head>
<body>
    <h1>Criar Marca</h1>

    <!-- Formulário para criar a marca -->
    <form action="{{ route('marcas.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('marcas.index') }}">Voltar</a>
</body>
</html>
