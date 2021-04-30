@extends('layout.master')
@section('content')
    <div class="container">
        @isset($category)
            <h1>Редагувати категорію <span>{{ $category->name }}</span></h1>
        @else
            <h1>Додати категорію</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($category)
              action="{{ route('categories.update', $category) }}"
              @else
              action="{{ route('categories.store') }}"
            @endisset
        >
            @isset($category)
                @method('PUT')
            @endisset
            @csrf
            <div class="form-group">
                <label>Назва</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder=""
                       value="{{ old('name', isset($category) ? $category->name : null) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Опис</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="">{{ old('description', isset($category) ? $category->description : null) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Картинка</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <button class="btn btn-primary">Зберегти</button>
        </form>
    </div>
@endsection
