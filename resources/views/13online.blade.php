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
            <div class="text-center">
                <a href="{{ url('/13online') }}">
                    <img class="img-fluid logo_website2" src="{{ url('/home/img/Logo@2x 1.png') }}">
                </a>
            </div>
            
                <div class="card-body" style="padding: 0.5rem 0.5rem;">

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
                        <a href="{{ url('/13online_2') }}" class="btn mb-1 btn-5">REGISTER FOR THE EVENT</a>
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