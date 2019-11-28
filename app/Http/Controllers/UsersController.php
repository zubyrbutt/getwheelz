<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
use App\Discussion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CreateUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function notifications ()
    {
        auth()->user()->unreadNotifications->markAsRead();

       return view('discussions.notifications',[

           'notifications' => auth()->user()->notifications
           
           ]);
    }


    public function index()
    {
        $role = Role::all();
        $user = User::all();
        return view('users.me')->with('users', $user)->with('roles', $role);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function create()
    {


        return view('users.create')->with('roles', Role::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsersRequest $request)
    {
        $image = $request->image->storeAs('users');
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
            'image' => $image,

        ]);

            
        //$user->roles()->attach($request['role']);


        $user->save();
        toast('Operation successfully', 'success');

        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Auth::user()){
        $role = Role::all();

        return view('users.create', ['roles' => $role])->with('user', $user);
    }else{
        return view('users.create')->with('user', $user);
    }
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
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        
        if ($user->id != Auth::user()->id) {

            $user->roles()->syncWithoutDetaching($request->role);
            $user->roles()->detach($user->roles()->first()->id);
            $user->roles()->attach($request->role);
        }
        if($request->hasFile('image'))
        {
            $image = $request->image->store('images');
            Storage::delete($user->image);

            $data['image'] = $image;

        }
        
        $user->update($data);
        
        // return redirect(route('users.index'));
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(User $user)
    {

        $user->delete();
        Storage::delete($user->image);
        
        $user->roles()->detach($user['role']);

        toast('Deleted successfully..', 'success');

        return redirect(route('users.index'));
    }


    
}
