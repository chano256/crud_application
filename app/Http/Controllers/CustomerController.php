<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createCustomer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required', 'max:25',
            'lastname' => 'required', 'max:25',
            'email' => 'required', 'max:75', 'unique:posts',
        ]);

        $POST = new Customer;

        $POST->firstname = $request->input('firstname');
        $POST->lastname = $request->input('lastname');
        $POST->email = $request->input('email');
        $POST->number = $request->input('number');
        $POST->address = $request->input('address');

        $POST->save();

        return redirect('/newcustomer')->with('success', 'Customer Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $customers = Customer::paginate(5);

        return view('customers', ['customers' => $customers]);
        //return view('customers', compact($customers));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname' => 'required', 'max:25',
            'lastname' => 'required', 'max:25',
            'email' => 'required', 'max:75', 'unique:posts',
        ]);

        $POST = Customer::find($id);

        $POST->firstname = $request->input('firstname');
        $POST->lastname = $request->input('lastname');
        $POST->email = $request->input('email');
        $POST->number = $request->input('number');
        $POST->address = $request->input('address');

        $POST->save();

        return redirect('/newcustomer')->with('success', 'Customer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
