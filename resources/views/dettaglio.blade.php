@extends('layout.app')
@section('title','dettaglio')
@section('content')
   
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <h5 class="bg-success text-light mt-5">
               {{$result['series']}} {{$result['price']}}
            </h5>
            <p class="mt-5">
                {{$result['description']}}
            </p>

        </div>
    </div>
</div>

@endsection