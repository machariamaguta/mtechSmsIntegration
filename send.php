<?php
class Send
{
	

	public function send($User,$Pass,$shortCode,$msisdn,$message)
	{
		
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://ke.mtechcomm.com/bulkAPIV2/?");

		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=".$User."&pass=".$Pass."&shortCode=".$shortCode."&MSISDN=".$msisdn."&MESSAGE=".$message);
		
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$result=curl_exec ($ch);

	}
}