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
            <form method="POST" id="myForm" action="{{ url('api/post_add_data') }}">
                {{ csrf_field() }}
                <div class="card-body pad-card-body" >

                @if (session('error'))
                    <div class="text-center">
                        <div class="alert alert-warning" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                            <span class="mx-2">อีเมลของคุณได้ทำการลงทะเบียนไปแล้ว</span>
                        </div>
                    </div>
                @endif

                @if (session('email_error'))
                    <div class="text-center">
                        <div class="alert alert-warning" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                            <span class="mx-2">รูปแบบอีเมลของคุณไม่ถูกต้อง</span>
                        </div>
                    </div>
                @endif

                
                
                    <div class="text-center">
                        <h3 class="text-headx text-white">REGISTER FOR JOINING THE EVENT</h3>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="md-form-group float-label">
                            <input class="md-input" name="name" value="{{ old('name') }}"  required="">
                            <input type="hidden" name="day" value="13" >
                            <input type="hidden" name="type" value="0" >
                            <label>NAME</label>
                        </div>
                        @error('name')
                        <div class="text-center">
                        <span class="invalid-feedback" role="alert">
                            <strong>กรุณากรอกชื่อของคุณด้วย </strong>
                        </span>
                        </div>
                        @enderror
                        <div class="md-form-group float-label">
                            <input class="md-input" name="surname" value="{{ old('surname') }}"  required="">
                            <label>SURNAME</label>
                        </div>
                        @error('surname')
                        <div class="text-center">
                        <span class="invalid-feedback" role="alert">
                            <strong>กรุณากรอกนามสกุลของคุณด้วย </strong>
                        </span>
                        </div>
                        @enderror
                        <div class="md-form-group float-label">
                            <input class="md-input" name="clinicname" value="{{ old('clinicname') }}"  required="">
                            <label>CLINIC NAME</label>
                        </div>
                        @error('clinicname')
                        <div class="text-center">
                        <span class="invalid-feedback" role="alert">
                            <strong>กรุณากรอกชื่อ clinic ของคุณด้วย </strong>
                        </span>
                        </div>
                        @enderror
                        <div class="md-form-group float-label">
                            <input class="md-input" name="email" value="{{ old('email') }}"  required="">
                            <label>EMAIL</label>
                        </div>
                        @error('email')
                        <div class="text-center">
                        <span class="invalid-feedback" role="alert">
                            <strong>กรุณากรอกอีเมลของคุณด้วย </strong>
                        </span>
                        </div>
                        @enderror
                    </div>
                    <div class="box-height-20"></div>
                    <div class="d-flex justify-content-center ">
                        <button onclick="myFunction()" class="btn w-sm mb-1 btn-5">OK</button>
                    </div>
                    
                </div>
            </form>
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

    <script>
        function myFunction() {
            document.getElementById("myForm").submit();
        }
</script>

@stop('scripts')