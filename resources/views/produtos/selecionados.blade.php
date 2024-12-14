<div class="container mt-5">
    <h1 class="mb-4">Produtos Selecionados</h1>

    @if(session('produtos_selecionados') && count(session('produtos_selecionados')) > 0)
        <div class="row">
            @foreach($produtos as $produto)
                <div class="card" style="width: 18rem; margin: 10px;">
                    <img class="card-img-top" src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>

                        <!-- Botão Remover -->
                        <form action="{{ route('produtos.remover', $produto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-2">Remover</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <script>
            alert('Nenhum produto selecionado.');
        </script>
    @endif

    <a href="{{ route('produtos.index') }}" class="btn btn-primary mt-3">Voltar</a>
</div>