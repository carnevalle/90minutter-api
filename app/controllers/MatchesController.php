<?php

class MatchesController extends \BaseController {


	public function __construct(Match $match)
	{
		$this->model = $match;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();

		$validation = Validator::make($input, $this->model->rules);

		if ($validation->passes())
		{
			$model = $this->model->create($input);
			$model->sync(array(1 => array('subin' => 45)));

			return Response::json(array(
	        	'error' => false
	    	), 200);
		}
	 
	    return Response::json(array(
	        'error' => true
	    ), 400);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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