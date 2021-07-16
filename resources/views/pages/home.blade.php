@extends('template/index')
@section('content')
@foreach ( $tabhome as $value2)
    

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('img/'.$value2->img)}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$value2->p1}} </span>
            <span class="section-heading-lower">{{$value2->p2}}</span>
            </h2>
            <p class="mb-3">{{$value2->p3}}
            </p>
            <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{$value2->p4}}</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="page-section cta">
    <div class="container">
        <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$value2->p5}}</span>
                <span class="section-heading-lower">{{$value2->p6}}</span>
            </h2>
            <p class="mb-0">{{$value2->p7}}</p>
            </div>
        </div>
        </div>
    </div>
    </section>
@endforeach

@endsection