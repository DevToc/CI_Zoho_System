<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'li_1' => 'Welcome to Qovex Dashboard'])
		];
		return view('index', $data);
	}

	public function delete()
	{
		$session = session();
		$uri = service('uri');
		$table = $uri->getSegment(2);
		$id = $uri->getSegment(3);
		$db      = \Config\Database::connect();
		$builder = $db->table($table);
		$builder->where('id', $id);
		$builder->delete();
		$info = [
			'status' => 'success',
			'message' => 'Successful Deleted'
		];
		$session->setFlashData("info", $info);
		return redirect()->back();
	}
}
