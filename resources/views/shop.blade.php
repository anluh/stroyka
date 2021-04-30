@extends('layout.master')

@section('content')

    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
                <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Фільтри</div>
                            <button class="block-sidebar__close" type="button">
                                <svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#cross-20"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse
                                 data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Фільтри</h4>
                                <form class="widget-filters__list" method="GET" action="{{ route('shop') }}">
                                    <div class="widget-filters__item">
                                        <div class="search">
                                            <div class="search__body">
                                                <input class="form-control" name="search" placeholder="Пошук..."
                                                       aria-label="Site search" type="text" autocomplete="off"
                                                       value="{{ request()->has('search') ? request()->search : NULL }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Категорії
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list">
                                                            @foreach($categories as $category)
                                                                <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
{{--                                                                                @dd(request()->categories)--}}
                                                                                <input class="input-check__input"
                                                                                       type="checkbox"
                                                                                       name="categories[]"
                                                                                       @isset (request()->categories) @if (in_array($category->id, request()->categories)) checked @endif @endisset
                                                                                       value="{{ $category->id }}">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px" height="7px">
                                                                                    <use
                                                                                        xlink:href="images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    <span
                                                                        class="filter-list__title">{{ $category->name }}</span>
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Ціна
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-price"
                                                         id="price-slider"
                                                         data-min="0"
                                                         data-max="{{ $maxPrice }}"
                                                         data-from="{{ request()->has('price_from') ? request()->price_from : 0 }}"
                                                         data-to="{{ request()->has('price_to') ? request()->price_to : $maxPrice }}">

                                                        <div class="filter-price__slider"></div>
                                                        <div class="filter-price__title">Ціна: ₴
                                                            <span class="filter-price__min-value"></span> – ₴<span class="filter-price__max-value"></span>
                                                        </div>
                                                        <input type="number" id="price-from"
                                                               class="hidden filter-price__min-value" name="price_from">
                                                        <input type="number" id="price-to"
                                                               class="hidden filter-price__max-value" name="price_to">
                                                        <span>{{ old('price_from') }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-filters__actions d-flex">
                                        <button class="btn btn-primary btn-sm" type="submit">Фільтр</button>
                                        <a href="{{ route('shop') }}" class="btn btn-secondary btn-sm">Скинути</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options view-options--offcanvas--mobile">
                                <div class="view-options__filters-button">
                                    <button type="button" class="filters-button">
                                        <svg class="filters-button__icon" width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#filters-16"></use>
                                        </svg>
                                        <span class="filters-button__title">Фільтри</span>
                                        <span class="filters-button__counter">3</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                             data-with-features="false" data-mobile-grid-columns="2">
                            <div class="products-list__body">
                                @foreach($products as $product)
                                    <div class="products-list__item">
                                        @include('components.card', ['product' => $product])
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            <div class="pagination justify-content-center">
                                {{ $products->links('components.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
