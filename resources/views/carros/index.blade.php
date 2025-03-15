<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carros</title>
</head>
<body>
    <h1>Carros</h1>

    <!-- Link para criar um novo carro -->
    <a href="{{ route('carros.create') }}">Criar novo Carro</a>

    <ul>
        <!-- Loop para exibir todos os carros -->
        @foreach ($carros as $carro)
            <li>
                {{ $carro->modelo }} ({{ $carro->ano }}) - {{ $carro->marca->nome }}
                
                <!-- Link para editar o carro -->
                <a href="{{ route('carros.edit', $carro) }}">Editar</a>
                
                <!-- Formulário para excluir o carro -->
                <form action="{{ route('carros.destroy', $carro) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
