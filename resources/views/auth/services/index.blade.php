@extends('layout.master')

@section('content')
    <div class="categories">
        <div class="container">
            <table class="wishlist">
            <thead class="wishlist__head">
            <tr class="wishlist__row">
                <th class="wishlist__column"></th>
                <th class="wishlist__column wishlist__column--product">Сервіси</th>
                <th class="wishlist__column wishlist__column--stock">Дії</th>
            </tr>
            </thead>
            <tbody class="wishlist__body">
            @foreach($services as $service)
                <tr class="wishlist__row">
                    <td class="wishlist__column table-image">
                        <img src="{{ Storage::url($service->image) }}">
                    </td>
                    <td class="wishlist__column wishlist__column--product">
                        <p class="wishlist__product-name">{{ $service->title }}</p>
                    </td>
                    <td class="wishlist__column wishlist__column--tocart">
                        <form action="{{ route('services.destroy', $service) }}" method="POST" class="form-delete">
                            <a href="{{ route('services.edit', $service) }}" type="button" class="btn btn-secondary btn-sm">Редагувати</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Видалити</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('services.create') }}" type="button" class="btn btn-secondary btn-lg add-category">Додати</a>

        </div>
    </div>
@endsection
