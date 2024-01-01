@extends('layouts.template')


@section('title')
Thailand aesthetic forum 2024
@stop

@section('stylesheet')

@stop('stylesheet')

@section('content')

<div id="main" class="layout-column flex">
    <div class="chakra-container">
        <div id="content" class="flex ">
            <div class="text-center">
                <a href="{{ url('/14onground') }}">
                    <img class="img-fluid logo_website2" src="{{ url('/home/img/Logo@2x 1.png') }}">
                </a>
            </div>
                    <div class="box-height-20"></div>
                <div class="card-body" style="padding: 0.5rem 0.5rem;">
                    <div class="text-center">
                        <img class="img-fluid " style="width:280px; height:154px" src="{{ url('/home/img/Asset 6@2x 1.png') }}">
                    </div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="text-center">
                        <a href="{{ url('/14onground_2') }}" class="btn mb-1 btn-5">REGISTER FOR THE EVENT</a>
                    </div>
                </div>
        </div>
        <div class="text-center show-destop">
            <h3 class="text-fotter-x-d-14">
               UNLIMITED POSSIBILITIES
            </h3>
        </div>
    </div>
    
    <div class="text-center hid-mobile">
            <h3 class="text-fotter-x">
               UNLIMITED POSSIBILITIES
            </h3>
    </div>
</div>


@endsection

@section('scripts')


@stop('scripts')