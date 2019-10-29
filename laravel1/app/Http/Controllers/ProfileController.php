<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=User::where('nip_nrp',auth::user()->nip_nrp)->first();
        return view('Profile.index',compact('data'));

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

       if($request->new_password ==null){

            $user=auth::user();
            $user->email=$request->email;
            $user->save();
            return back()->with('succes','email berhasil di rubah');
       }
       else{
                $this->validate($request,[
                    'current_password'=>'min:6',
                    'new_password'=>'required|min:6|same:confirm_password',
                    'confirm_password'=>'required|min:6',
            ]);
            if(!Hash::check($request->get('current_password'),auth::user()->password)){
            return redirect()->back()->with('succes','password yang anda masukkan tidak sama');
            }
            if(strcmp($request->get('current_password'),$request->get('new_password'))==0){
                    return redirect()->back()->with('succes','maaf password yang anda masukkan sama dengan password lama');
            }
            if(strcmp($request->get('new_password'),$request->get('confirm_password'))){
                    return redirect()->back()->with('succes','maaf confirm password tidak sama');
            }
            $user=auth::user();
            $user->password=bcrypt($request->get('new_password'));
            $user->save();
            auth::logout();
            return redirect()->route('login')->with('succes','password berhasil di rubah');
       }

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
    public function destroy($id)
    {
        //
    }
}
