<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
 
class ApiController extends Controller 
 
{   
  public function createCustomer(Request $request) 
  {
    $customer = new Customer(); 
    $customer->firstname = $request->input('firstname');
    $customer->lastname = $request->input('lastname');
    $customer->email = $request->input('email');
    $customer->number = $request->input('number');
    $customer->address = $request->input('address'); 
    $customer->save();
    
    return response()->json($customer);  
  }

  public function showCustomers() {
    $customers = Customer::all();

    return response()->json($customers);
  }

}