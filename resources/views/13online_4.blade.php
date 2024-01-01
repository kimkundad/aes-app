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
                <a href="{{ url('/13online') }}">
                    <img class="img-fluid logo_website2" src="{{ url('/home/img/Logo@2x 1.png') }}">
                </a>
            </div>
            
                <div class="card-body" style="padding: 0.5rem 0.5rem;">

                    <div class="box-height-20"></div>
                    <div class="text-center">
                        <h3 class="text-headx text-white">THANK YOU FOR REGISTRATION</h3>
                        <div class="box-height-20"></div>
                        <h3 class="text-headx text-white">PLEASE CHECK YOUR EMAIL <br>
                            FOR MORE INFORMATION AND THE<br>
                            LINK FOR JOINING THE EVENT</h3>
                        <div class="box-height-20"></div>
                        <h3 class="text-headx text-white">SEE YOU SOON</h3>
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