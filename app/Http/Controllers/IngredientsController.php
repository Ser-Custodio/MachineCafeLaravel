<?php
	namespace App\Http\Controllers;

	class IngredientsController extends Controller
	{
		public function IngTable(){
			$ingredients = ['Eau' => 100,
							'Cafe' => 100,
							'The' => 100,
							'Whisky' => 150,
							'Chocolat' => 150];
			return view('ingredients', ['Ing' => $ingredients]);
		}
	}
