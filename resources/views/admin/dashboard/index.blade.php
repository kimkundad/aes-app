@extends('admin.layouts.template')

@section('title')
    <title>Thailand aesthetic forum 2024</title>
    <meta name="description" content=" Thailand aesthetic forum 2024">
@stop
@section('stylesheet')

@stop('stylesheet')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            ภาพโดยรวมเว็บไซต์</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">ดูสถิติต่างๆ</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">

                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    
                <div class="row g-5 g-xl-8">
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													
													<div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $all }}</div>
													<div class="fw-semibold text-white">ผู้ลงทะเบียนทั้งมหด</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										
									</div>

                <div class="row g-5 g-xl-8">
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													
													<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">{{ $onground13 }}</div>
													<div class="fw-semibold text-gray-400">13 OnGround</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													
													<div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">{{ $online13 }}</div>
													<div class="fw-semibold text-gray-100">13 OnLine</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													
													<div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $onground14 }}</div>
													<div class="fw-semibold text-white">14 OnGround</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										<div class="col-xl-3">
											<!--begin::Statistics Widget 5-->
											<a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													
													<div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $online14 }}</div>
													<div class="fw-semibold text-white">14 OnLine</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
									</div>
                    

                    
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
               
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>

@endsection

@section('scripts')

@stop('scripts')
