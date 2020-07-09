<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //$data = Biodata::all();
        
        $params = $request->all();
        
        $data = Biodata::filter($params)->get();
        $data = [
            'biodata_list' => $data
        ];
        
        return view('home',$data);
    }
    
    public function create(){
        return view('add');
    }
    
    public function store(Request $request){
        
//        print_data($request->all());
        
        $data = $request->except('_token');
        
        Biodata::create($data);
        
        return redirect(route('home'))->with('success', "Biodata added successfully.");
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::where('id',$id)->first();
        
        if(empty($biodata))
        {
            return redirect(route('home'))->with('error', "Biodata not found.");
        }

        $data = [
            'id' => $id,
            'biodata' => $biodata,
        ];

        return view('edit')->with($data);
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
        $biodata = Biodata::where('id',$id)->first();
        
        if(empty($biodata))
        {
            return redirect(route('home'))->with('error', "Biodata not found.");
        }
        
        $data = $request->except('_token');
        
        $biodata->update($data);
        
        return redirect(route('home'))->with('success', "Biodata updated successfully.");
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        if(Biodata::deleteById($id)){
            return redirect(route('home'))->with("success","Biodata deleted successfully.");
        }
        else{
            return redirect(route('home'))->with("error","Failed to delete biodata.");
        }
    }
    
    public function generatePDF(Request $request, $id){
        $biodata = Biodata::where('id',$id)->first();
        
        if(empty($biodata))
        {
            return redirect(route('home'))->with('error', "Biodata not found.");
        }
//        print_data($biodata);
        
        $data = ['biodata' => $biodata];
        
//        return view('biodatapdf')->with($data);
        
        $pdf = PDF::loadView('biodatapdf', $data);
        return $pdf->download('biodata.pdf');
    }
}
