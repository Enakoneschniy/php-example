<?php
	

	class HomeController extends Controller
	{
		//http://example.local
		public function index()
		{
			//главная страница
			//return view('home.php')
		}


		//http://example.local/add-subscript ==> post
		public function add_subscript(){
			//добавление подписки в бд
			//Страница добавления подписки
			//return view('subscript.php')
		}

		//http://example.local/add-subscript ==> get
		public function subscript(){
			//Страница добавления подписки
			//return view('subscript.php')
		}
	}