@extends('template/index')
@section('content')
@foreach ( $tabstore as $value5 )
<section class="page-section cta">
    <div class="container">
        <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{{$value5->p2}}</span>
                <span class="section-heading-lower">{{$value5->p3}}</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                    {{$value5->p4}}
                <span class="ml-auto">{{$value5->p5}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                    {{$value5->p6}}
                <span class="ml-auto">{{$value5->p7}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                    {{$value5->p8}}
                <span class="ml-auto">{{$value5->p9}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                    {{$value5->p10}}
                <span class="ml-auto">{{$value5->p11}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                    {{$value5->p12}}
                <span class="ml-auto">{{$value5->p13}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                    {{$value5->p14}}
                <span class="ml-auto">{{$value5->p15}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                    {{$value5->p16}}
                <span class="ml-auto">{{$value5->p17}}</span>
                </li>
            </ul>
            <p class="address mb-5">
                <em>
                <strong>{{$value5->p18}}</strong>
                <br>
                {{$value5->p19}}
                </em>
            </p>
            <p class="mb-0">
                <small>
                <em>{{$value5->p20}}</em>
                </small>
                <br>
                {{$value5->p21}}
            </p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/'.$value5->img1)}}" alt="">
        <div class="about-heading-content">
        <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$value5->p22}}</span>
                <span class="section-heading-lower">{{$value5->p23}}</span>
                </h2>
                <p>{{$value5->p24}}</p>
                <p class="mb-0">{{$value5->p25}}
                <em>{{$value5->p26}}</em>
                {{$value5->p27}}</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endforeach


@endsection