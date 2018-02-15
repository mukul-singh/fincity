<?php

namespace App\Http\Controllers;
use Input;
use View;

class Site extends Controller {
	public function crm() {
		$data = file_get_contents("http://localhost/fincity/public/salesData?timeline=Quarterly");
		$data = json_decode($data);
		$title = "Fincity - CRM";
		$description = "Fincity - CRM";
		echo View::make('header', ['title' => $title, 'description' => $description])->render();
		echo View::make('sidebar')->render();
		echo View::make('crm', ["data" => $data])->render();
		return View::make('footer')->render();
	}

	public function salesData() {
		$data = array();
		$clients = array("Sobha Developers", "Nitesh Estates", "MIMS Builders", "Colombia Developers", "Brigade Group", "Bagmane Developers");
		$tasks = array("Deal for LAP", "Confirm Appointment", "Follow Up Call", "Close the Deal");
		$status = array("Closed", "Pending", "Overdue", "Closed");
		$projects = array("Sobha Palm Court", "Colombia Heritage", "MIMS Habitat", "Brigade Rubix", "Prestige Pinewood");
		$data['timeline'] = Input::get("timeline");
		$data['totalClients'] = mt_rand(1000, 5000);
		$data['newClientsAdded'] = mt_rand(1, 100);
		$data['newClientsAddedStat'] = mt_rand(-100, 100);
		$data['newClientsMet'] = mt_rand(1, 100);
		$data['newClientsMetStat'] = mt_rand(-100, 100);
		$data['promotersMet'] = mt_rand(500, 1000);
		$data['promotersMetStat'] = mt_rand(-100, 100);
		$data['inPerson'] = mt_rand(100, 500);
		$data['inPersonStat'] = mt_rand(1, 100);
		$data['phoneCall'] = mt_rand(100, 1000);
		$data['phoneCallStat'] = mt_rand(1, 100);
		$data['clientsMet'] = mt_rand(500, 1500);
		$data['clientsMetStat'] = mt_rand(-100, 100);
		$data['callReports'] = mt_rand(1000, 5000);
		$data['callReportsStat'] = mt_rand(-100, 100);
		$data['pending'] = array();
		$data['source'] = array();
		$data['meetup'] = array();
		for($i = 0; $i < 6; $i++) {
			array_push($data['pending'], array('task' => $tasks[mt_rand(0, count($tasks) - 1)], 'client' => $clients[mt_rand(0, count($clients) - 1)], 'status' => $status[mt_rand(0, count($status) - 1)]));
			array_push($data['source'], array('project' => $projects[mt_rand(0, count($projects) - 1)], 'client' => $clients[mt_rand(0, count($clients) - 1)], 'cost' => mt_rand(10, 50).' Cr'));
			array_push($data['meetup'], array('client' => $clients[mt_rand(0, count($clients) - 1)], 'inPerson' => mt_rand(5, 15), 'cost' => mt_rand(10, 50).' Cr'));
		}
		return json_encode($data);
	}
}