@extends('layouts.template')


@section('title')
Thailand aesthetic forum 2024
@stop

@section('stylesheet')

@stop('stylesheet')

@section('content')

<div id="main" class="layout-column flex">
    <div class="chakra-containerx2">
        <div id="content" class="flex ">
            <div class="img-mo" >
                <div class="d-flex justify-content-center">
                    <img src="{{ url('/home/img/ma-logo-primary-white-rgb.svg') }}" style="width:149px; height:13px; margin-top:30px">
                </div>
            </div>
            <div class="img-dek-top " style="margim-bottom:30px">
                <div class="d-flex justify-content-end" style="right: 5%; top: 0px; position: fixed;">
                    <img src="{{ url('/home/img/ma-logo-primary-white-rgb.svg') }}" style="width:229px; height:20x; margin-top:30px" >
                </div>
            </div>
            <div class="hid-mobile-hi" style="height: 30px"></div>
            <div class="text-center">
                <a href="{{ url('/13onground') }}">
                    <img class="img-fluid logo_website2" src="{{ url('/home/img/Logo-Thailand-Aesthetics-Business-Forum2024.png') }}">
                </a>
            </div>
            
                <div class="card-body " style="padding: 0.5rem 0.5rem; ">

                    <div class="img-mo">
                        <img class="img-fluid w-100" src="{{ url('/home/img/Group 16.png') }}">
                    </div>
                    <div class="row img-dek">
                        <div class="col-md-6">
                            <img class="img-fluid w-100 p-20" src="{{ url('/home/img/13/Asset 3@4x 1.png') }}">
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid w-100 p-20" src="{{ url('/home/img/13/Asset 4@4x 1.png') }}">
                        </div>
                    </div>
                    
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="text-center">
                        {{-- <a href="{{ url('/13onground_2') }}" class="btn mb-1 btn-5">REGISTER FOR THE EVENT</a> --}}
                    </div>
                </div>
        </div>
        <div class="text-center show-destop">
            <h3 class="text-fotter-x-d">
               UNLIMITED POSSIBILITIES
            </h3>
        </div>
    </div>
    
    <div class="text-center hid-mobile" style="position: fixed;
        width: 100%;
  left: 50%;
  bottom: 20px;
  transform: translate(-50%, -50%);
  margin: 0 auto;">
            <h3 class="text-fotter-x">
               UNLIMITED POSSIBILITIES
            </h3>
    </div>
</div>


@endsection

@section('scripts')


@stop('scripts')