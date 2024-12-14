<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos da FakeStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Produtos da FakeStore</h1>

        <a href="{{ route('produtos.selecionados') }}" class="btn btn-warning mb-4">Ver Produtos Selecionados</a>

        @if(count($produtos) > 0)
            <div class="row">
                @foreach($produtos as $produto)
                    <div class="card" style="width: 18rem; margin: 10px;">
                        <img class="card-img-top" src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <p>{{ $produto->descricao }}</p>
                            <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>

                            <a href="{{ route('produtos.selecionar', $produto->id) }}" class="btn btn-primary mt-2">Selecionar Produto</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-danger mt-4" role="alert">
                 Nenhum produto encontrado na FakeStore.
            </div>
        @endif
    </div>
</body>
</html>
