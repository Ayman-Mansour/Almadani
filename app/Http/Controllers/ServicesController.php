<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

use \Session;

class ServicesController extends Controller
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
        $services = Service::all();
        return view('services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.add-service');    
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

      $new_service = new Service;
      $new_service->name = $request->name;
      $new_service->description = $request->description;
      $new_service->price = $request->price;
      $new_service->save();
        
    
      $services = Service::all();
      return view('services.index',compact('service'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('services.details',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.update',compact('service'));
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

      $new_service = Service::find($id);
      $new_service->name = $request->name;
      $new_service->description = $request->description;
      $new_service->price = $request->price;
      $new_service->save();
      Session::flash('message', 'You successfully updated Service');
      

      $services = Service::all();
      return view('services.index',compact('services'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id)->delete();
        Session::flash('message', 'You successfully deleted Service');
        $services = Service::all();
      return view('services.index',compact('services'));
    }
}
