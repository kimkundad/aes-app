<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Thailand aesthetic forum 2024</title>
		<meta charset="utf-8" />
		<meta name="description" content="Thailand aesthetic forum 2024" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

        <style>
            body, body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Prompt', sans-serif !important;
                }
                span, p , li ,strong, option , label, input, a, b {
                font-family: 'Prompt', sans-serif !important;
                }
        </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body class="app-blank app-blank">
		
            <div style="background: #01071D; border-radius: 12px; padding:25px">
				<!--begin::Item-->
                <div style="display:flex">
                    <img style=" height:140px; width:237px" src="{{ url('/home/img/logo_email.png') }}">
                </div>								
                <!--begin::Media-->				
			</div>
            <div>
                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:18px;">Hi {{ $details['name'] }}</p>
                <h1 style="color:#01071D; margin: 0px; margin-top:20px">Thank You</h1>
                <h2 style="color:#01071D; margin: 0px;">Your registration is confirmed<br> for the LIVE WEBINAR</h2>
                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:18px;">“Thailand Aesthetics Business Forum 2024" <br>
                SAVE THE DATE, Feb {{ $details['day'] }}, 2024 9:00 AM Pacific Time
                </p>
                <a href="{{ url('/live') }}" ><img src="{{ url('home/img/Watch-Now.png') }}" style="width:206px; margin-top:20px; height:50px"></a>
                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:13px;">Keep in touch we’ll send your Webinar passcode 1 Day before LIVE WEBINAR</p>
            </div>
    
	</body>
	<!--end::Body-->
</html>