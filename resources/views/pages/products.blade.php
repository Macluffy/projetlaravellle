@extends('template/index')
@section('content')
@foreach ( $tabproducts as $value4 )
<section class="page-section">
    <div class="container">
        <div class="product-item">
        <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
                <span class="section-heading-upper">{{$value4->p2}}</span>
                <span class="section-heading-lower">{{$value4->p3}} &amp; {{$value4->p4}}</span>
            </h2>
            </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('img/'.$value4->img1)}}" alt="">
        <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$value4->p5}}</p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="page-section">
    <div class="container">
        <div class="product-item">
        <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
                <span class="section-heading-upper">{{$value4->p6}}</span>
                <span class="section-heading-lower">{{$value4->p7}} &amp; {{$value4->p8}}</span>
            </h2>
            </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('img/'.$value4->img2)}}" alt="">
        <div class="product-item-description d-flex ml-auto">
            <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$value4->p9}}</p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="page-section">
    <div class="container">
        <div class="product-item">
        <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
                <span class="section-heading-upper">{{$value4->p10}}</span>
                <span class="section-heading-lower">{{$value4->p11}}</span>
            </h2>
            </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('img/'.$value4->img3)}}" alt="">
        <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$value4->p12}}</p>
            </div>
        </div>
        </div>
    </div>
    </section>


@endforeach


@endsection