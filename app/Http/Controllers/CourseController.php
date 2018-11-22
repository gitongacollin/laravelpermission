<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Program;
use Auth;
use Session;
use App\Academic;
use App\Level;
use App\Shift;
use App\Time;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('web'); 
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getManageCourse()
    {
        $programs = Program::all();
        $shift =Shift::all();
        $academics = Academic::orderBy('academic_id','DESC')->get();
        return view('courses.manageCourse',compact('programs','academics','shift'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postInsertAcademic(Request $request)
    {
        if ($request->ajax())
        {
            return response(Academic::create($request->all()));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postInsertProgram(Request $request)
    {
        if ($request->ajax())
        {
            return response(Program::create($request->all()));
        }
    }
    public function postInsertLevel(Request $request)
    {
        if($request->ajax())
        {
            return response(Level::create($request->all()));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showLevel(Request $request)
    {
        if($request->ajax())
        {
            return response(Level::where('program_id',$request->program_id)->get());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createShift(Request $request)
    {
        if($request->ajax())
        {
            return(Shift::create($request->all()));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createTime(Request $request)
    {
        if($request->ajax())
        {
            return(Time::create($request->all()));
        }
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
    }
}
