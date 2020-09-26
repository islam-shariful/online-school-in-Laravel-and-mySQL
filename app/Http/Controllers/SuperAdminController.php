<?php

namespace App\Http\Controllers;

use App\SuperAdmin;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = DB::table('schooladmin')->get();
        return view('superadmin.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createadmin()
    {
        $schooladmin = DB::table('schooladmin')
                        ->orderBy('schooladmin.id', 'desc')
                        ->pluck('schooladmin_id');
        
        $schooladmin_id = explode("-", $schooladmin[0]);
        $schooladmin_id[1] = (int)$schooladmin_id[1];
        $schooladmin_id[1] = sprintf('%04d', $schooladmin_id[1] + 1);
        $schooladmin_id = "{$schooladmin_id[0]}-{$schooladmin_id[1]}-{$schooladmin_id[2]}";
        var_dump($schooladmin_id);
        return view('superadmin.createadmin')->with('schooladmin_id', $schooladmin_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'userid'            => 'required',
            'username'          => 'required',
            'email'             => 'required',
            'password_input'    => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|required_with:confirm_password|same:confirm_password',
            'confirm_password'  => 'min:8'
        ]);

    $type="schooladmin";

        DB::table('schooladmin')
            ->insert(['schooladmin_id'      => $request->userid,
                        'schooladminname'     => $request->username,
                        'schooladminemail'     => $request->email]);

        DB::table('login')
            ->insert(['user_id'      => $request->userid,
                        'userpassword'     => $request->password_input,
                        'usertype'     => $type]);

        return redirect()->route('superadmin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(SuperAdmin $superAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schooladmin = DB::table('schooladmin')
                        ->where('id', $id)->first();
        
        $password = DB::table('login')
                        ->where('user_id', $schooladmin->schooladmin_id)->first();
        
        return view('superadmin.updateadmin')->with('schooladmin', $schooladmin)->with('password', $password);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'userid'            => 'required',
            'username'          => 'required',
            'email'             => 'required',
            'password_input'    => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|required_with:confirm_password|same:confirm_password',
            'confirm_password'  => 'min:8'
        ]);

        $type="schooladmin";

        DB::table('schooladmin')
            ->where('schooladmin_id', $request->userid)
            ->update(['schooladmin_id'      => $request->userid,
                        'schooladminname'     => $request->username,
                        'schooladminemail'     => $request->email]);

        DB::table('login')
            ->where('user_id', $request->userid)
            ->update(['user_id'      => $request->userid,
                        'userpassword'     => $request->password_input,
                        'usertype'     => $type]);
        
        return redirect()->route('superadmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schooladmin = DB::table('schooladmin')
                        ->where('id', $id)->first();

        DB::table('login')->where('user_id', $schooladmin->schooladmin_id)->delete();
        
        DB::table('schooladmin')->where('id', $id)->delete();

        return redirect()->route('superadmin.index');
    }
}
