<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Marcas</title>
</head>
<body>
    <h1>Marcas</h1>

    <!-- Link para criar uma nova marca -->
    <a href="{{ route('marcas.create') }}">Criar nova Marca</a>

    <ul>
        <!-- Loop para exibir todas as marcas -->
        @foreach ($marcas as $marca)
            <li>
                {{ $marca->nome }}
                
                <!-- Link para editar a marca -->
                <a href="{{ route('marcas.edit', $marca) }}">Editar</a>
                
                <!-- Formulário para excluir a marca -->
                <form action="{{ route('marcas.destroy', $marca) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
