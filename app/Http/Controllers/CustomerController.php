<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
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
        return view('createcustomer');
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
            'email' => 'required', 'max:100', 'unique:posts',
        ]);

        $POST = new Customer;

        $POST->firstname = $request->input('firstname');
        $POST->lastname = $request->input('lastname');
        //Hashing the email in the database
        //$UPDATE->email = Hash::make($request->input('email'));
        $POST->email = $request->input('email');
        $POST->number = $request->input('number');
        $POST->address = $request->input('address');

        $POST->save();

        return redirect('/customers')->with('success', 'Customer Saved');
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
            'email' => 'required', 'max:500', 'unique:posts',
        ]);

        $UPDATE = Customer::find($id);

        $UPDATE->firstname = $request->input('firstname');
        $UPDATE->lastname = $request->input('lastname');
        $UPDATE->email = $request->input('email');
        $UPDATE->number = $request->input('number'); 
        $UPDATE->address = $request->input('address');

        $UPDATE->save();

        return redirect('/customers')->with('success', 'Customer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        $customer->delete();

        return redirect('customers')->with('danger', '!!Customer deleted.');
    }
}
