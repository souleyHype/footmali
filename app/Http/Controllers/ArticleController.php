<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $articles = Article::all();
            $template = ($this->isAdminRequest()) ? 'articles.admin.index' : 'articles.index';
            return view($template)->with('articles', $articles);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
             return view('articles.admin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// todo: validation
		$form_input = Request::all();
		Article::create($form_input);
		
		return redirect(action('ArticleController@index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Article $article)
	{
            return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Article $article)
	{
            return view('articles.admin.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Article $article)
	{
            $form_input = Request::all();
            $article->update($form_input);
            
            return redirect(action('ArticleController@index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
