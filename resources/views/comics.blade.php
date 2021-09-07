@extends('layout.app')
@section('title','Home')
@section('content')
    <section class="bg-dark text-light section_prodotti">
        <div class="container ">
            <div class="row d-flex p-5">
                    @foreach($comics as $items)
                    <div class="col-2">
                        <img class="prodotti" src="{{$items['thumb']}}" alt="">
                        <h5>{{$items['series']}}</h5>
                    </div>
                    @endforeach
                </div>
            </div> 
    </section>
@endsection
