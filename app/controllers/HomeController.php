<?php

class HomeController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$books = Book::with('author', 'publisher', 'category')
			->where(DB::raw('DATEDIFF(NOW(), created_at)'), '<=', '10')
			->orderBy('created_at', 'desc')
			->get();

		$categories_options = array(''=>'All');
		$categories = Category::orderBy('category_name', 'asc')->get();
		foreach($categories as $category)
			$categories_options[$category->id] = $category->category_name;

		$publishers_options = array(''=>'All');
		$publishers = Publisher::orderBy('publisher_name', 'asc')->get();
		foreach($publishers as $publisher)
			$publishers_options[$publisher->id] = $publisher->publisher_name;


		return View::make('home.index', array(
			'books' => $books,
			'categories' => $categories_options,
			'publishers' => $publishers_options
			));
	}

	public function search()
	{
		$books = Book::join('authors', function($join){
				$join->on('books.author_id','=','authors.id');
			})
			->join('publishers', function($join){
				$join->on('books.publisher_id','=','publishers.id');
			})
			->join('categories', function($join){
				$join->on('books.category_id','=','categories.id');
			})
			->where(function($query){
				if(Input::get('search', null) != null) {
					$query->where(function($q1){
						$q1->where('books.title', 'LIKE', '%'.Input::get('search').'%');
						$q1->orWhere('authors.author_name', 'LIKE', '%'.Input::get('search').'%');
					});
				}
				
				if(Input::get('category_id', '') != '')
					$query->where('books.category_id', '=', Input::get('category_id'));

				if(Input::get('publisher_id', '') != '')
					$query->where('books.publisher_id', '=', Input::get('publisher_id'));
			})
			->select('books.*', 'authors.author_name', 'publishers.publisher_name', 'categories.category_name')
			->orderBy('books.created_at', 'desc')
			->get();

		$categories_options = array(''=>'All');
		$categories = Category::orderBy('category_name', 'asc')->get();
		foreach($categories as $category)
			$categories_options[$category->id] = $category->category_name;

		$publishers_options = array(''=>'All');
		$publishers = Publisher::orderBy('publisher_name', 'asc')->get();
		foreach($publishers as $publisher)
			$publishers_options[$publisher->id] = $publisher->publisher_name;


		return View::make('home.search', array(
			'books' => $books,
			'categories' => $categories_options,
			'publishers' => $publishers_options
			));
	}

}