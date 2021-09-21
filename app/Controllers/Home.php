<?php

namespace App\Controllers;

use App\Models\PromoModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->ModelPromo = new PromoModel();
	}

	public function index()
	{
		$data = array(
			'isi' => 'v_home',
			'promo' => $this->ModelPromo->tampil_data(),
		);
		return view('layout/v_wrapper', $data);
	}
}
