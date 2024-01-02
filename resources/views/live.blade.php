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
           
            <div style="height:550px"></div>
        </div>
    </div>
    <div class="text-center">
            <h3 class="text-fotter-x">
               UNLIMITED POSSIBILITIES
            </h3>
    </div>
</div>


@endsection

@section('scripts')

    <script>
        function myFunction() {
            document.getElementById("myForm").submit();
        }
</script>

@stop('scripts')