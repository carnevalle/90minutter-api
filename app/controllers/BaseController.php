<?php

class BaseController extends Controller {

	protected $model;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$result = $this->model->all();

		//$urls = Url::where('user_id', Auth::user()->id)->get();
	 
	    return Response::json(array(
	        'error' => false,
	        'urls' => $result->toArray()),
	        200
	    );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Make sure current user owns the requested resource
	    $result = $this->model->where('user_id', Auth::user()->id)
	            ->where('id', $id)
	            ->take(1)
	            ->get();

	    return Response::json(array(
	        'error' => false,
	        'urls' => $result->toArray()),
	        200
	    );
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
	    	//$model->user_id = Auth::user()->id;
	    	//$model->save();

			return Response::json(array(
	        	'error' => false
	    	), 200);
		}
	 
	    return Response::json(array(
	        'error' => true
	    ), 400);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		// if ( ! is_null($this->layout))
		// {
		// 	$this->layout = View::make($this->layout);
		// }
	}

}