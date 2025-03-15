<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Marca</title>
</head>
<body>
    <h1>Editar Marca</h1>

    <!-- Formulário para editar a marca -->
    <form action="{{ route('marcas.update', $marca) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método PUT para atualização -->
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $marca->nome) }}" required>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('marcas.index') }}">Voltar</a>
</body>
</html>
