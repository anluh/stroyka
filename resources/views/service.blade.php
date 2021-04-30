@extends('layout.master')

@section('content')
    <div class="services">
        <section>
            <div class="services__banner clip-path" style="background-image: url({{Storage::url($service->image)}})">

            </div>
            <div class="container">
                <p class="services__body">{{$service->body}}</p>
            </div>
        </section>
    </div>
@stop
