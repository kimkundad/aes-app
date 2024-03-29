<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>{{ $objs->name }} {{ $objs->surname }} </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link rel="stylesheet" href="{{ url('/home/assets/css/bootstrap.css') }}" type="text/css" />
        <link href="{{ url('/home/assets/css/style.css') }}?v{{time()}}" rel="stylesheet" type="text/css" />
        
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
    <style type="text/css">
        body {
        background: #17181c;
        background-image: url('{{ url('home/img/BG_Image_1.jpg') }}');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .separator.separator-dashed {
    border-bottom-style: dashed;
    border-bottom-color: #323248;
}
.separator {
    display: block;
    height: 0;
    border-bottom: 1px solid #323248;
}
    </style>
	<!--begin::Body-->
	<body id="kt_body" class="app-blank app-blank">
		<!--begin::Theme mode setup on page load-->
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-column-fluid">
				
				<!--begin::Body-->
				<div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style=" --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
					<!--begin::Email template-->
					<style>html,body { padding:0; margin:0; font-family: Inter, Helvetica, "sans-serif"; } a:hover { color: #009ef7; }</style>
					<div id="#kt_app_body_content" style=" font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
						<div style="background-color:#01071d1c; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;     outline: 1px solid;">
							<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
								<tbody>
									<tr>
										<td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
											<!--begin:Email content-->
											<div style="text-align:center; margin:0 60px 34px 60px">
												<!--begin:Logo-->
												<div style="margin-bottom: 0px">
													<a>
														<img alt="Logo" src="{{ url('home/img/Logo-Thailand-Aesthetics-Business-Forum2024.png') }}" style="height: 100px" />
													</a>
												</div>
                                                <div class="separator separator-dashed" style="margin:15px 0;"></div>
												<!--end:Logo-->
                                                
												<!--begin:Text-->
												<div style="font-size: 14px; margin-top:20px; font-weight: 500; margin-bottom: 42px; ">
													<p style="margin-bottom:2px;  margin-top:35px; color:#ffffff; font-size: 26px; font-weight:700">{{ $objs->name }} {{ $objs->surname }}</p>
													<p style="margin-bottom:12px; color:#7E8299; font-size: 22px; ">รายชื่อลูกค้าผู้เข้าร่วม</p>
                                                    <br>
													<p style="margin-bottom:2px; margin-top:10px; color:#ffffff; font-weight:700; font-size: 20px;">{{ $objs->clinic_name }}</p>
													<p style="margin-bottom:2px; color:#7E8299; font-size: 18px;">Clinic name</p>
												</div>
												<!--end:Text-->
												<!--begin:Order-->
												<div style="margin-bottom: 15px">
													
													<!--begin:Items-->
													<div style="padding-bottom:9px">
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:0px">
															<!--begin:Description-->
															<h3 style="text-align:center; color:#ffffff; font-size: 16px; font-weight:600; margin-bottom: 5px">{{ $objs->email }}</h3>
															<!--end:Description-->
															<h3 style="text-align:center; color:#ffffff; font-size: 16px; font-weight:600; margin-bottom: 5px">{{ $objs->day }}</h3>
														</div>
														<!--end:Item-->
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500;">
															<!--begin:Description-->
															<div style="font-weight:600; font-size: 16px;">Email</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="font-weight:600; font-size: 16px;">วันที่เข้าร่วม</div>
															<!--end:Total-->
														</div>
														<!--end:Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed" style="margin:15px 0"></div>
														<!--end::Separator-->
														
													</div>
													<!--end:Items-->
												</div>
												<!--end:Order-->

                                                @if($objs->status === 0)
												<!--begin:Action-->
                                                <div id="checkin_div">
												<a id="checkin" class="btn mb-1 btn-5">
                                                    ลงทะเบียนเข้างาน
                                                </a>
                                                </div>
                                                @else
                                                <div style="margin-bottom: 15px">
													<img alt="Logo" src="{{ url('img/check.png') }}">
												</div>
                                                <p style="margin-bottom:9px; color:#ffffff; font-size: 18px; font-weight:700">ลงทะเบียนเข้างานเรียบร้อยแล้ว!</p>
                                                @endif
												<!--begin:Action-->
											</div>
											<!--end:Email content-->
										</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					<!--end::Email template-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ url('/admin/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ url('/admin/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ url('/admin/assets/js/custom/authentication/sign-in/general.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('a#checkin').click(function(){ 
                    var user_id = {{ $objs->id }}
                    $.ajax({
                    type:'POST',
                    url:'{{url('api/api_post_status_user')}}',
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    data: { "user_id" : user_id },
                    success: function(data){
                    if(data.data.success){
        
        
                        Swal.fire({
                            text: "ระบบได้ทำการอัพเดทข้อมูลสำเร็จ!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
        
                        document.getElementById('checkin_div').innerHTML = "";
                        $("#checkin_div").html('<div style="margin-bottom: 15px"><img alt="Logo" src="{{ url('img/icon-positive-vote-2.svg') }}"></div><p style="margin-bottom:9px; color:#ffffff; font-size: 18px; font-weight:700">ลงทะเบียนเข้างานเรียบร้อยแล้ว!</p>');
                    }
                    }
                });

                 })
            });
        </script>
	</body>
	<!--end::Body-->
</html>