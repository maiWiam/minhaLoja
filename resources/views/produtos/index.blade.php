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
        <div class="row">
            @foreach ($produtos as $produto)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $produto->imagem }}" class="card-img-top" alt="{{ $produto->nome }}" style="max-height: 150px; width: auto; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <p class="card-text text-truncate">{{ $produto->descricao }}</p>
                            <p class="card-text"><strong>Categoria:</strong> {{ $produto->categoria }}</p>
                            <p class="card-text"><strong>Avaliação:</strong> {{ $produto->avaliacao }} ({{ $produto->num_avaliacoes }} avaliações)</p>
                            <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
