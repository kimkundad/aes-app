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
                <img class="img-fluid logo_website2" src="{{ url('/home/img/Logo@2x 1.png') }}">
            </div>
            
                <div class="card-body" style="padding: 0.5rem 0.5rem;">

                <div class="rounded border">
                    <div class="scroll h-400px px-5">
                        <p>Your privacy and the protection of your personal data is important to us. This Privacy Notice explains the type of personal data Merz may collect from you and how we use it.
                        </p>
                        <p>Merz Healthcare (Thailand) Company Limited (“Merz”) is a global operating company. Merz recognizes and respects the privacy rights of individuals with regards to their Personal Data (as defined below) and is committed to protecting Personal Data and upholding applicable data protection standards.
                        </p>
                        <p>
                        For the purposes of this Privacy Notice, “information” or “personal data” means any information relating to a person, which enables the identification of such person, whether directly or indirectly.
                        </p>
                        <p>
                        We therefore would like to inform you about the collection, use, disclosure, transfer and/or processing (collectively refer to as “process” or “processing”) of your personal data below and ask for your consent for certain processing. You may withdraw your consent to Merz processing your personal data at any time.
Should you contact us to report a problem or make a complaint or otherwise communicate with us, we collect information in order to resolve your query. For contact information related to our local affiliate, please refer to Merz website atwww.merzclubthailand.com.
                        </p>
                        <p>
                        The Purpose of Processing Your Personal Information
This website is intended to be accessed only by selected qualified healthcare professionals and not the general public as this website may contain technical and/or medical information which unqualified persons should not have access to for safety reasons. As such, Merz collects and processes your personal data for and/or in connection with the purposes of verifying your identity and that you have the necessary and appropriate qualifications to access and use the website and its content.
                        </p>
                        <div class="box-height-10"></div>
                        <div class="text-center">
                        <a href="{{ url('/13onground_3') }}" class=" text-accepted">ACCEPTED</a>
                        </div>
                        
                    </div>
                </div>
                    
                </div>
        </div>
        <div class="text-center show-destop">
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