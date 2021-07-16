@extends('template/index')
@section('content')
@foreach ( $tababout as $value3 )
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/'.$value3->img1)}}" alt="">
        <div class="about-heading-content">
        <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$value3->p2}}</span>
                <span class="section-heading-lower">{{$value3->p3}}</span>
                </h2>
                <p>{{$value3->p4}}</p>
                <p class="mb-0">{{$value3->p5}} <em>{{$value3->p6}}</em> {{$value3->p7}}</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endforeach


@endsection