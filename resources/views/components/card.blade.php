<div class="product-card product-card--hidden-actions ">
    @auth
        <a href="{{ route('products.edit', $product) }}" class="product-card__quickview">
            <i class="fas fa-pen" style="font-size: 16px;"></i>
        </a>
        <form action="{{ route('products.destroy', $product) }}" method="POST" class="form-delete">
            @csrf
            @method('DELETE')
            <button class="product-card__quickview delete"><i class="fas fa-trash-alt" style="font-size: 16px;"></i></button>
        </form>
    @endauth
    <div class="product-card__image product-image">
        <a href="{{ route('product', $product) }}" class="product-image__body">
            <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
        </a>
    </div>
    <div class="product-card__info">
        <div class="product-card__name">
            <a href="/{{ $product->id }}">{{ $product->name }}</a>
        </div>
    </div>
    <div class="product-card__actions">
        <div class="product-card__prices">{{ $product->price }} грн</div>
    </div>
</div>

