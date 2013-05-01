<?php

class ContactsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Displaying the list
		return Contact::all();
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// creating a new contact
		$input = Input::json();

		Contact::create(array(
			'first_name' => $input->first_name,
			'last_name' => $input->last_name,
			'email_address' => $input->email_address,
			'description' => $input->description
		)); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// show contact
		return Contact::find($id);
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
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// update contact
		$contact = Contact::find($id);
		$input = Input::json();

		$contact->first_name = $input->first_name;
		$contact->last_name = $input->last_name;
		$contact->email_address = $input->email_address;
		$contact->description = $input->description;

		$contact->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete contact
		return Contact::find($id)->delete;


	}

}