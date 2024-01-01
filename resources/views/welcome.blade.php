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
            <form method="POST" id="myForm" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="card-body" style="padding: 1.25rem 0.5rem;">


                @error('username')
                <div class="text-center">
                <span class="invalid-feedback" role="alert">
                    <strong>ไม่พบยูสเซอร์เนมหรือพาสเวิร์ดผิด </strong>
                </span>
                </div>
                @enderror

                @error('password')
                <div class="text-center">
                <span class="invalid-feedback" role="alert">
                    <strong>ไม่พบยูสเซอร์เนมหรือพาสเวิร์ดผิด </strong>
                </span>
                </div>
                @enderror

                    <div class="text-center">
                        <h3 class="text-headx text-white">เข้าสู่ระบบหลังบ้าน</h3>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="md-form-group float-label">
                            <input class="md-input" type="text" name="username" value="{{ old('username') }}" onkeyup="this.setAttribute('value', this.value);" required>
                            <label>Username</label>
                        </div>
                        <div class="md-form-group float-label">
                            <input class="md-input" type="password" name="password" value="" onkeyup="this.setAttribute('value', this.value);" required>
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="box-height-20"></div>
                    <div class="d-flex justify-content-center ">
                        <button onclick="myFunction()" class="btn w-sm mb-1 btn-5">OK</button>
                    </div>
                    
                </div>
            </form>
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