<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;

use App\Models\Service;

use \Session;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index',compact('invoices'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
     
        return view('invoices.add-invoice',compact('services'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $name = $request->input('name');
      $description = $request->input('description');
      $price = $request->input('price');

      $new_invoice = new Invoice;
      $new_invoice->name = $request->name;
      $new_invoice->description = $request->description;
      $new_invoice->price = $request->price;
      $new_invoice->save();
        
        return view('invoices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices.details',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices.update',compact('invoice'));
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
        $name = $request->input('name');
      $description = $request->input('description');
      $price = $request->input('price');

      $new_invoice = Invoice::find($id);
      $new_invoice->name = $request->name;
      $new_invoice->description = $request->description;
      $new_invoice->price = $request->price;
      $new_invoice->save();
      Session::flash('message', 'You successfully updated invoice');
      

      $invoices = invoice::all();
      return view('invoices.index',compact('invoices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id)->delete();
        Session::flash('message', 'You successfully deleted invoice');
    }
}
