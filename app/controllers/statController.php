<?php

class StatController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /stat
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /stat/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /stat
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /stat/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /stat/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /stat/{id}
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
	 * DELETE /stat/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function state($month){
		$time = jDate::forge('now - '.$month.' month')->format("Y/m/d");
		$dateArray = explode('/',$time);
		//$timestamp = Shamsi::jmktime(0,0,0,$dateArray[1], $dateArray[2], $dateArray[0]);
		$timestamp = ($month*30*24*60);
		$result = DB::select('select state_id,(count(state_id)*100/(select count(*) from persons WHERE date >= date - ?))as prcnt from persons group by state_id',[$timestamp]);
		$items[] = null;
		return View::make('stat.show')->with(['items'=>$result]);
		//return $timestamp;
	}

}