<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		return view('Pages/Home', $data);
	}

	public function Category()
	{
		$data = [
			'title' => 'Category',
		];
		return view('Pages/Shop/Category', $data);
	}

	public function ProductDetail()
	{
		$data = [
			'title' => 'ProductDetail',
		];
		return view('Pages/Shop/ProductDetail', $data);
	}

	public function Checkout()
	{
		$data = [
			'title' => 'Checkout',
		];
		return view('Pages/Shop/Checkout', $data);
	}

	public function Cart()
	{
		$data = [
			'title' => 'Cart',
		];
		return view('Pages/Shop/Cart', $data);
	}

	public function Confirmation()
	{
		$data = [
			'title' => 'Confirmation',
		];
		return view('Pages/Shop/Confirmation', $data);
	}

	// public function Login()
	// {
	// 	$data = [
	// 		'title' => 'Login',
	// 	];
	// 	return view('Pages/Login', $data);
	// }
}
