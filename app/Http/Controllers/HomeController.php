<?php

namespace App\Http\Controllers;

use App\Car;
use App\User;
use App\Message;
use Pusher\Pusher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
       $user = User::where('id', '!=', Auth::id())
       ->where('id', '!=', 1)->get();
        return view('chat')->with('users', $user);
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->orWhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
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

        // // pusher
        // $options = array(
        //     'cluster' => 'ap2',
        //     'useTLS' => true
        // );

        // $pusher = new Pusher(
        //     env('9c6166a2db27f95f45c8'),
        //     env('8d6ab984828c070587ad'),
        //     env('918946'),
        //     $options
        // );

        // $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        // $pusher->trigger('my-channel', 'my-event', $data);
    }
}
