@extends('layout.master')
@section('content')
    <div class="frontpage">
        <!-- .block-slideshow -->
        <div class="block-slideshow block-slideshow--layout--with-departments block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block"></div>
                    <div class="col-12 col-lg-9">
                        <div class="block-slideshow__body">
                            <div class="owl-carousel">
                                @isset($services)
                                    @foreach($services as $service)
                                        <a class="block-slideshow__slide" href="{{ route('service', $service->id) }}">
                                            <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                                 style="background-image: url('{{ Storage::url($service->image) }}')"></div>
    {{--                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"--}}
    {{--                                             style="background-image: url('images/{{$image}}.jpg')"></div>--}}
                                        </a>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-slideshow / end -->
        <!-- .block-features -->
        <div class="block block-features block-features--layout--classic">
            <div class="container">
                <div class="block-features__list">
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-free-delivery-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Безкоштовна доставка</div>
                            <div class="block-features__subtitle">На відстань 20км</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-24-hours-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Підтримка 24/7</div>
                            <div class="block-features__subtitle">Дзвоніть коли вам зручно</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-payment-security-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">100% Безпечно</div>
                            <div class="block-features__subtitle">Оплачуйте коли при отриманні</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="images/sprite.svg#fi-tag-48"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Гарячі пропозиції</div>
                            <div class="block-features__subtitle">Знижки постійним клієнтам до 20%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-features / end -->
        <!-- .block-banner -->
        <div class="block block-banner">
            <div class="container">
                <a href="{{ route('shop') }}" style="background: url('images/poster-home.svg') center/cover no-repeat" class="block-banner__body"></a>
            </div>
        </div>
        <!-- .block-banner / end -->
        <!-- .block-products -->
        <div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Свіжі пропозиції</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-products__body">
                    <div class="block-products__featured">
                        <div class="block-products__featured-item">
                            <div class="product-card product-card--hidden-actions ">
                                @auth
                                    <a href="{{ route('products.edit', $products[0]) }}"
                                       class="product-card__quickview">
                                        <i class="fas fa-pen" style="font-size: 16px;"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $products[0]) }}" method="POST" class="form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button class="product-card__quickview delete"><i class="fas fa-trash-alt"
                                                                                          style="font-size: 16px;"></i>
                                        </button>
                                    </form>
                                @endauth
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div>
                                <div class="product-card__image product-image">
                                    <a href="{{ route('product', $products[0]) }}" class="product-image__body">
                                        <img class="product-image__img" src="{{ Storage::url($products[0]->image) }}"
                                             alt="">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="{{ route('product', $products[0]) }}">{{$products[0]->name}}</a>
                                    </div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__prices">
                                        {{$products[0]->price}} грн
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-products__list">
                        @foreach($products as $key => $product)
                            @if($key > 0)
                                <div class="block-products__list-item">
                                    @include('components.card', ['product' => $product])
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-products / end -->
        <!-- .block-brands -->
        <div class="block block-brands">
            <div class="container">
                <div class="block-brands__slider">
                    <div class="owl-carousel">
                        @for ($num=1; $num<20; $num++)
                            <div class="block-brands__item">
                                <img src="images/companies/company_{{$num}}.webp" alt="">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-brands / end -->
    </div>
@stop
