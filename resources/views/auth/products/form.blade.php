@extends('layout.master')
@section('content')
    <div class="container products-add">
        @isset($product)
            <h1>Редагувати продукт <span>{{ $product->name }}</span></h1>
        @else
            <h1>Додати продукт</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            @isset($product)
                @method('PUT')
            @endisset
            @csrf
            <div class="form-group">
                <label>Назва</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder=""
                       value="{{ old('name', isset($product) ? $product->name : null) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Ціна</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder=""
                       value="{{ old('price', isset($product) ? $product->price : null) }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Категорія</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                        @isset($product)
                            @if ($product->category_id == $category->id)
                                selected
                            @endif
                        @endisset
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Опис</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="">{{ old('description', isset($product) ? $product->description : null) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Картинка</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <button class="btn btn-primary">Зберегти</button>
        </form>
    </div>
@endsection
