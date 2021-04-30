@extends('layout.master')
@section('content')
    <div class="container">
        @isset($service)
            <h1>Редагувати сервіс <span>{{ $service->title }}</span></h1>
        @else
            <h1>Додати сервіс</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($service)
              action="{{ route('services.update', $service) }}"
              @else
              action="{{ route('services.store') }}"
            @endisset
        >
            @isset($service)
                @method('PUT')
            @endisset
            @csrf
            <div class="form-group">
                <label>Назва</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder=""
                       value="{{ old('name', isset($service) ? $service->title : null) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Опис</label>
                <textarea name="body" class="form-control @error('body') is-invalid @enderror" placeholder="">{{ old('body', isset($service) ? $service->body : null) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group service-image">
                <label for="image">Картинка</label>
                @isset($service->image)
                    <div>
                        <img src="{{ Storage::url($service->image) }}" alt="image">
                    </div>
                @endisset
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <button class="btn btn-primary">Зберегти</button>
        </form>
    </div>
@endsection
