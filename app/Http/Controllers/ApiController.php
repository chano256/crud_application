<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
 
class ApiController extends Controller 
 
{   
  //Customer COntroller
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
  
  public function showCustomerById($id) {
    $customers = Customer::find($id);

    return response()->json($customers);
  }

  public function updateCustomerById(Request $request, $id) {
    $customers = Customer::find($id);

    $customers->firstname = $request->input('firstname');
    $customers->lastname = $request->input('lastname');
    $customers->email = $request->input('email');
    $customers->number = $request->input('number');
    $customers->address = $request->input('address');

    $customers.save();
    return response()->json($customers);
  }

  public function deleteCustomerById(Request $request, $id) {
    $customers = Customer::find($id);

    $customers.delete();

    return response()->json($customers);
  }

  //Product COntroller
  public function createProduct(Request $request) 
  {
    $product = new Product(); 

    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->service = $request->input('service');

    $product->save();
    
    return response()->json($product);  
  }

  public function showProducts() {
    $products = Customer::all();

    return response()->json($products);
  }
  
  public function showProductById($id) {
    $products = Product::find($id);

    return response()->json($products);
  }

  public function updateProductById(Request $request, $id) {
    $product = Product::find($id);

    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->service = $request->input('service');

    $product.save();
    return response()->json($product);
  }

  public function deleteProductById(Request $request, $id) {
    $product = Product::find($id);

    $product.delete();

    return response()->json($product);
  }

  //Invoice COntroller
  public function createInvoice(Request $request) 
  {
    $invoice = new Invoice(); 

    $invoice->date = $request->input('date');
    $invoice->price = $request->input('price');
    $invoice->description = $request->input('description');
    $invoice->service = $request->input('service');

    $invoice->save();
    
    return response()->json($invoice);  
  }

  public function showInvoices() {
    $invoices = Customer::all();

    return response()->json($invoices);
  }
  
  public function showInvoiceById($id) {
    $invoices = Invoice::find($id);

    return response()->json($invoices);
  }

  public function updateInvoiceById(Request $request, $id) {
    $invoice = Invoice::find($id);

    $invoice->date = $request->input('date');
    $invoice->price = $request->input('price');
    $invoice->description = $request->input('description');
    $invoice->service = $request->input('service');

    $invoice.save();
    return response()->json($invoice);
  }

  public function deleteInvoiceById(Request $request, $id) {
    $invoice = Invoice::find($id);

    $invoice.delete();

    return response()->json($invoice);
  }
}