@extends('layouts.general')
@section('page_title')
@php
    $title
@endphp
@endsection
@section('content')
    <div class="container py-4 singleMovie d-flex justify-content-center align-items-center">
        <div class="row h-100">
            <div class="col-5">
                <img class="img-fluid shadow" src="{{$image}}" alt="{{$title}}">
            </div>
            <div class="col-7">
                <div class="row justify-content-between align-items-center py-2 border-bottom gx-0">
                    <div class="col-3"><small>Titolo ITA</small></div>
                    <div class="col-9"><h5 class="m-0 p-0">{{$title}}</h5></div>
                </div>
                <div class="row justify-content-between align-items-center py-2 border-bottom gx-0">
                    <div class="col-3"><small>Originale</small></div>
                    <div class="col-9"><h6 class="m-0 p-0">{{$original_title}}</h6></div>
                </div>
                <div class="row justify-content-between align-items-center py-2 border-bottom gx-0">
                    <div class="col-3"><small>Nazionalità</small></div>
                    <div class="col-9 text-capitalize"><p class="m-0 p-0">{{$nationality}}</p></div>
                </div>
                <div class="row justify-content-between align-items-center py-2 border-bottom gx-0">
                    <div class="col-3"><small>Uscita</small></div>
                    <div class="col-9"><p class="m-0 p-0">{{date("d-m-Y", strtotime($date));}}</p></div>
                </div>
                <div class="row justify-content-between align-items-center py-2 border-bottom gx-0">
                    <div class="col-3"><small>Voto Medio</small></div>
                    <div class="col-9 text-capitalize"><p class="m-0 p-0">{{$vote}} / 10</p></div>
                </div>


            </div>

        </div>
    </div>
@endsection
