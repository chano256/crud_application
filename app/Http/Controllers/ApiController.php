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
  
  public function showById($id) {
    $customers = Customer::find($id);

    return response()->json($customers);
  }

  public function updateById(Request $request, $id) {
    $customers = Customer::find($id);

    $customers->firstname = $request->input('firstname');
    $customers->lastname = $request->input('lastname');
    $customers->email = $request->input('email');
    $customers->number = $request->input('number');
    $customers->address = $request->input('address');

    $customers.save();
    return response()->json($customers);
  }

  public function deleteById(Request $request, $id) {
    $customers = Customer::find($id);

    $customers.delete();

    return response()->json($customers);
  }
}