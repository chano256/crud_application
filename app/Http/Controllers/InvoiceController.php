<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createinvoice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'date' => 'required',
            'customer' => 'required', 'unique:posts',
            'product' => 'required',
        ]);

        $POST = new Invoice;

        $POST->date = $request->input('date');
        $POST->customer = $request->input('customer');
        $POST->product = $request->input('product');

        $POST->save();

        return redirect('/invoices')->with('success', 'Invoice Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $invoices = Invoice::paginate(5);

        return view('invoices', ['invoices' => $invoices]);
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
            'date' => 'required',
            'customer' => 'required',
            'product' => 'required',
        ]);

        $UPDATE = Invoice::find($id);

        $UPDATE->date = $request->input('date');
        $UPDATE->customer = $request->input('customer');
        $UPDATE->product = $request->input('product');

        $UPDATE->save();

        return redirect('/invoices')->with('success', 'Invoice Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);

        $invoice->delete();

        return redirect('invoices')->with('danger', '!!Invoice deleted.');
    }
}
