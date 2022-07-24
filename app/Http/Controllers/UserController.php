<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
        $user = User::find($id);
        return view('pages.settingprofile', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        // dd($request->all());
        $request->validate([
            'alamat' => 'required',
            'name' => 'required',
            'nohp' => 'required',
            'jenis_kelamin' => 'required',
        ]);

         if ($request->hasFile('foto')) {
        $path = $request->name . '.' . $request->foto->extension();
        $request->file('foto')->storeAs('user', $path, 'public');
        }
        // Else add a dummy photo
        else {
        $path = 'Nophoto.jpg';
        }

        $user = User::find($request->id);
        // if($request->input('password')){
        //     $user->password = $request->input('password');
        // }else{
        //     unset($user->password);
        // }
        $user->name = $request->name;
        $user->nohp = $request->nohp;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->foto = $path;
        $user->update();

         if($user){
            return redirect()->back()->with(['success' => 'Data Berhasil Terekam!']);
        }else{
            return redirect()->back()->with(['danger' => 'Data Tidak Terekam!']);
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
