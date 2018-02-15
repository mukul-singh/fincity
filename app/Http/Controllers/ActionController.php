<?php

namespace App\Http\Controllers;
use Input;
use View;

class ActionController extends Controller {
	public function actions() {
		$action = Input::get("action");
		if($action == "getSalesData") {
			$timeline = Input::get("timeline");
			$data = file_get_contents("http://localhost/fincity/public/salesData?timeline=$timeline");
			$data = json_decode($data);
			return View::make('salesData', ["data" => $data])->render();
		}

		else if($action == "getModal") {
			$data = array();
			$data['source'] = array();
			$clients = array("Sobha Developers", "Nitesh Estates", "MIMS Builders", "Colombia Developers", "Brigade Group", "Bagmane Developers");
			$projects = array("Sobha Palm Court", "Colombia Heritage", "MIMS Habitat", "Brigade Rubix", "Prestige Pinewood");
			for($i = 0; $i < 100; $i++) {
				array_push($data['source'], array('project' => $projects[mt_rand(0, count($projects) - 1)], 'client' => $clients[mt_rand(0, count($clients) - 1)], 'cost' => mt_rand(10, 50).' Cr'));
			}
			return View::make("modalContent", ['data' => $data])->render();
		}
	}
}