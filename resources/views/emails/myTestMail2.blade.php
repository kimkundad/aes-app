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
                <h1 style="color:#01071D; margin: 0px; margin-top:40px">THANK YOU</h1>
                <h1 style="color:#01071D; margin: 0px;">FOR REGISTERING OUR EVENTS.</h1>
                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:20px;">Feb {{ $details['day'] }}, 2024 Time 8:00 AM</p>
                
                <img src="{!!$message->embedData(QrCode::format('png')->size(220)->generate($details['qrcode']), 'QrCode.png', 'image/png')!!}">
                    <div style="width:200px; text-align: center; ">
                    <p style="font-size:16px">{{ $details['qrcode'] }}</p>
                    </div>
                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:14px;">This is QR Code for Event Participation.<br>
                Please Show this QR Code at the Event Reception for Checking In.
                </p>
            </div>
    
	</body>
	<!--end::Body-->
</html>