<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\API\Constant;
use App\User;
class CustomerController extends Controller
{
    public $constant;
    public function __construct()
    {
        $this->constant = new Constant();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $profile_admin_id      = (new Constant())::ADMIN_ID;
        $profile_employee_id   = (new Constant())::EMPLOYEE_ID;
        $profile_customer_id   = (new Constant())::CUSTOMER_ID;
        $no_result             = (new Constant())::NO_RESULT_FOUND;

        $customers= User::where(['profile_id'=>$profile_customer_id])->get();
        return view('dashboard.shared.customer.all',compact('profile_admin_id','profile_employee_id','profile_customer_id','customers','no_result'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::findOrFail($request['user_id']);
        $user->delete();
        return redirect()->back()->with('success',$this->constant::SUCCESS_DELETE_USER);
     
    }


}
