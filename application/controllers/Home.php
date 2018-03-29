<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->render('home/index');
	}

	public function about()
	{
		$this->render('home/about');
	}

	public function contact()
	{
		$this->render('home/contact');
	}

	public function services()
	{
		$this->render('home/services');
	}

	public function customers()
	{
		$this->render('home/customers');
	}

	public function projects()
	{
		$this->render('home/projects');
	}

}
