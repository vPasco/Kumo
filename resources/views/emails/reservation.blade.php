<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
		}

		h1 {
			font-size: 24px;
			color: #ff6600;
			margin-bottom: 10px;
		}

		h2 {
			font-size: 20px;
			color: #666;
			margin-bottom: 5px;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
		}

		.message {
			margin-top: 20px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>RESERVATION</h1>
		<h2>Received From {{ $data->name }} - {{ $data->email }}</h2> 

		<h1>User details:</h1>
		<h2><strong>Name:</strong> {{ $data->name }}</h2>
		<h2><strong>Email:</strong> {{ $data->email }}</h2>
		<h2><strong>Event Type:</strong> {{ $data->event_type }}</h2>
		<h2><strong>Date &amp; Time:</strong> {{ $data->date_time }}</h2>
		<h2><strong>Theme:</strong> {{ $data->theme }}</h2>
		<h2><strong>Estimated Pax:</strong> {{ $data->estimated_pax }}</h2>

		<div class="message">
			<h2>Message:</h2>
			<p>{{ $data->message }}</p>
		</div>
	</div>
</body>
</html>
