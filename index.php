<?php
	// Dependancies
		include("send.php");
		// Include proper connect file
		include("connect.php");
		$phoneNumber=array();
	// Parameters Editable
		$message='Message';
		$shortCode='shortCode';
	// Parameters Uneditable
		$User='username';
		$Pass='password';
	// PhoneNumber Loop
		$sql="SELECT phonenumber FROM table";
		$result=mysqli_query($link,$sql);
		while($data=mysqli_fetch_assoc($result))
		{
			$number='254'.substr($data['phonenumber'], -9);
			array_push($phoneNumber,$number);
		}
	// Queueing system
	function hesabu($User,$Pass,$shortCode,$phoneNumber,$message)
	{
		$info=count($phoneNumber);

		for($x=0;$x<$info;$x++)
		{
			$msisdn=$phoneNumber[$x];

			// Send SMS'
			$sms=new Send;
			$sms->send($User,$Pass,$shortCode,$msisdn,$message);
		}
	}
	// Start Sending process
	hesabu($User,$Pass,$shortCode,$phoneNumber,$message);




