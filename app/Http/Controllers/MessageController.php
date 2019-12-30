<?php

namespace App\Http\Controllers;
use App\User;
use App\Message;
use Musonza\Chat\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\PostMessageRequest;

class MessageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       
    
            return view('chat.index');
        }






    
    public function chat(Message $message)
    {

        

        $users = User::where('id', '!=', Auth::id())->first();
        return view('chat.index')->with('users', $users);

    }
    
    

    public function show($id)
    {
        $user = User::findOrfail($id);
        
        $my_id = Auth::id();
        {
        $messages = Message::where(function($query) use ($id, $my_id){
            $query->where('from',$my_id)->where('to', $id);
        })->orWhere(function($query) use ($id, $my_id){
            $query->where('from', $id)->where('to', $my_id);
        })
        ->get();
        
        return view('chat.show')->with('messages', $messages)->with('user', $user);
    
    }
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
    public function store(Request $request, $id)
    {
        $id = $request->route('id');
        
        $message = Message::create([
            'to' => $request->$id,
            'from' => auth()->id(),
            'message' => $request->message,
            
        ]);
        dd(auth()->id());
            return redirect()->route('chat',[$id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }

    public function sendMessage(Message $message)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
    }
}
