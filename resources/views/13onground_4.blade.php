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
                <a href="{{ url('/13onground') }}">
                    <img class="img-fluid logo_website2" src="{{ url('/home/img/Logo@2x 1.png') }}">
                </a>
            </div>
            
                <div class="card-body" style="padding: 0.5rem 0.5rem;">

                    <div class="box-height-20"></div>
                    <div class="text-center">
                        <h3 class="text-headx text-white fs-16">THANK YOU</h3>
                        <div class="box-height-20"></div>
                        <div class="d-flex justify-content-center">
                            <div class="text-center bg-white w-250x300 ">
                                {!! QrCode::size(250)->generate($characters) !!}
                                <h4>{{ $characters }}</h4>
                            </div>
                        </div>
                        <div class="box-height-20"></div>
                        <h3 class="text-headx text-white fs-16">PLEASE TAKE A SCREENSHOT TO BRING <br>
                            THE QR CODE TO SCAN FOR REGISTRATION<br>
                            AT ON GROUND EVENT</h3>
                    </div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                </div>
        </div>
        <div class="text-center show-destop">
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
            <h3 class="text-fotter-x-d">
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