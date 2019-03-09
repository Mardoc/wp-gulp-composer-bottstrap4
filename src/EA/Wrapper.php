<?php
	/**
	 * Created by Mardoc.
	 * Web : http://mardoc.net
	 * Mail: works@mardoc.net
	 * DateTime: 08.03.2019 19:52
	 */
	
	namespace EA;
	
	
	class Wrapper
	{
		function FindPlayer($name){
			
			$client = new \GuzzleHttp\Client();
			$response = $client->request('GET', 'https://www.easports.com/ru/fifa/ultimate-team/api/fut/item',
			[
				'query' => ['jsonParamObject' => '{"name":"'.$name.'"}'],
				'debug' => true
			]
			);
			$body = $response->getBody();
			$content = $body->getContents();
			$js = \GuzzleHttp\json_decode($content,true);
			echo '<pre>'; print_r($js); die();
		}
	}