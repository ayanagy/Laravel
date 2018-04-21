<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
      
        if($request->hasfile("image")){
            $path=$request->image->store('public');
      
}
         
           $employee=new Employee;
             $employee->fName=$request->input('fname');
             $employee->lName=$request->input('lname');
             $employee->image=$request->input('image');
             $employee->job=$request->input('job');
             $employee->status=$request->input('status');
             $employee->lng=$request->input('lng');
             $employee->lat=$request->input('lat');

     
                //$employee->image=$path;


            $employee->save();
               //return back();
              
            //$data=DB::table('employees')->get();   
            return redirect('/listEmployees');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
       $data=DB::table('employees')->get(); 
       return view('listEmployee',compact('data'));

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

        $employee= DB::table('employees')->find($id);

        return view("updateEmployee",compact('employee'));
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
        //


        DB::table('employees')->where('id', $id)->update(['fName' =>$request->input('fname'),"lName"=>$request->input('lname') ,
        
        'status' =>$request->input('status'),'job' =>$request->input('job'),
        'lat' =>$request->input('lat'),'lng' =>$request->input('lng'),
        'image' =>$request->input('image')
        
        
        ]);
    
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


        DB::table('employees')->where('id', $id)->delete();

        return redirect('/listEmployees');
    }

    public function search(Request $request)
    {
        //

        $data = $request->get('data');

        $search_drivers = Employee::where('fName', 'like', "%{$data}%")
                         ->orWhere('lName', 'like', "%{$data}%")
                         ->orWhere('job', 'like', "%{$data}%")
                         ->orWhere('status', 'like', "%{$data}%")
                         ->orWhere('image', 'like', "%{$data}%")
                         ->orWhere('lng', 'like', "%{$data}%")
                         ->orWhere('lat', 'like', "%{$data}%")
                         ->get();

        return Response::json([
            'data' => $search_drivers
        ]);
        
        

    return view('searchEmployee',compact('data'));    



    }









}
