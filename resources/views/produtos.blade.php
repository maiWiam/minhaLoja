@foreach ($produtos as $produto)
    <div>
        <h2>{{ $produto->nome }}</h2>
        <p>Preço: {{ $produto->preco }}</p>
        </div>
@endforeach