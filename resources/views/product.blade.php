@extends('layout.master')

@section('content')


    <div class="block">
        <div class="container">
            <div class="product product--layout--standard" data-layout="standard">
                <div class="product__content">
                    <!-- .product__gallery -->
                    <div class="product__gallery">
                        <div class="product-gallery">
                            <div class="product-gallery__featured">
                                <button class="product-gallery__zoom">
                                    <svg width="24px" height="24px">
                                        <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                    </svg>
                                </button>
                                <div class="owl-carousel" id="product-image">
                                    <div class="product-image product-image--location--gallery">
                                        <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                        <a href="" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                            <img class="product-image__img" src="{{ Storage::url($product->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-image product-image--location--gallery">
                                        <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                        <a href="images/products/product-16-1.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                            <img class="product-image__img" src="images/moon.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-image product-image--location--gallery">
                                        <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                        <a href="images/products/product-16-2.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                            <img class="product-image__img" src="images/moon.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-image product-image--location--gallery">
                                        <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                        <a href="images/products/product-16-3.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                            <img class="product-image__img" src="images/moon.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-image product-image--location--gallery">
                                        <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                        <a href="images/moon.jpg" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                            <img class="product-image__img" src="images/moon.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .product__gallery / end -->
                    <!-- .product__info -->
                    <div class="product__info">
                        <div class="product__wishlist-compare">
                            <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Wishlist">
                                <svg width="16px" height="16px">
                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare">
                                <svg width="16px" height="16px">
                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                </svg>
                            </button>
                        </div>
                        <h1 class="product__name">{{ $product->name }}</h1>
                        <div class="product__description">{{ $product->description }}</div>
                        <ul class="product__features">
                            <li>Speed: 750 RPM</li>
                            <li>Power Source: Cordless-Electric</li>
                            <li>Battery Cell Type: Lithium</li>
                            <li>Voltage: 20 Volts</li>
                            <li>Battery Capacity: 2 Ah</li>
                        </ul>
                    </div>
                    <!-- .product__info / end -->
                    <!-- .product__sidebar -->
                    <div class="product__sidebar">
                        <div class="product__availability">
                            Availability: <span class="text-success">In Stock</span>
                        </div>
                        <div class="product__prices">{{ $product->price }}грн</div>
                    </div>
                    <!-- .product__end -->
                </div>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel -->
    @if (count($related) > 1)
        <div class="block" data-layout="grid-5" data-mobile-grid-columns="2">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Пов'язані продукти</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block block-products">
                    <div class="block-products__body">
                    @foreach($related as $relatedProduct)
                        @if ($product->id !== $relatedProduct->id)
                            <div class="block-products__list-item">
                                @include('components.card', ['product' => $relatedProduct])
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- .block-products-carousel / end -->


@stop
