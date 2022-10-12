<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;

use App\Models\Service;

use App\Models\Invserv;

use \Session;

class InvoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
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
      $user_id = $request->input('user_id');
      $input = $request->all();
      $services[]=$request->input('services[]');
      $price=$request->input('price');
      $claim = $request->input('sum');
      $vat = $request->input('vat');
      $total = $request->input('total');
      $claim = 0;
    //   dd( $request()->all() );
    for($i=0; $i < count($input['services']);$i++){
        $service_id=$input['services'][$i];

        $service_price[$i] = Service::find($service_id)->price;
        $claim += $service_price[$i];
    }
      $vat = $claim * 0.05;
      $total = $claim + $vat;
      $new_invoice = new Invoice;
      $new_invoice->user_id = $user_id;
      $new_invoice->claim = $claim;
      $new_invoice->vat = $vat;
      $new_invoice->total = $total;
      $new_invoice->notes = $request->notes;
      $new_invoice->save();
      $invoice = Invoice::all()->last();
      $invoice_id = $invoice->id;
     for($i=0; $i < count($input['services']);$i++){
             $service=$input['services'][$i];
             $new_invserv=new Invserv;
             $new_invserv->invoice_id=$invoice_id;
             $new_invserv->service_id=$service;
             $new_invserv->save();
            }
     
        return redirect('invoices');
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
        $invservs = Invserv::where("invoice_id","=",$id)->get()->all();

        return view('invoices.details',compact('invoice','invservs'));
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

    public function print($id)
    {
        // $invoices = Invoice::all();
        return view('invoices.invoice-print');
        // ,compact('invoices'));   
     }
}
