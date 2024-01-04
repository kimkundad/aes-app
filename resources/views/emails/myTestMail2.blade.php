<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>THANK YOU TO JOIN WITH US</title>
		<meta charset="utf-8" />
		<meta name="description" content="THANK YOU TO JOIN WITH US" />
		
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
            <div style="text-align: center;">
                <h1 style="color:#01071D; margin: 0px; margin-top:40px">Thank You for registering</h1>
                <h2 style="color:#01071D; margin: 0px;">“Thailand Aesthetics Business Forum 2024"</h2>
                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:20px;">Feb {{ $details['day'] }}, 2024 Time 8:00 AM</p>
                
                <img src="{!!$message->embedData(QrCode::format('png')->size(220)->generate($details['qrcode']), 'QrCode.png', 'image/png')!!}">
                    <p style="font-size:16px">{{ $details['qrcode'] }}</p>
                <p style="font-size:16px; font-weight: 600">Please download / save / capture screen the QR code <br> 
                    and show to QR code to join the event at the specified time and date
                    <br>
                    Hope to see you there!
                </p>
                <p style="color:#01071D; margin: 0px; margin-top:20px; font-size:14px;">Date Time : Feb 13, 2024 9:00 AM Pacific Time<br>
                    Waldorf Astoria Bangkok Hotel Magnolia Ballroom, 10th   Floor
                </p>
            </div>
    
	</body>
	<!--end::Body-->
</html>