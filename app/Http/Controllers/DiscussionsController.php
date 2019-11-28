<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\CreateDiscussionRequest;
use App\Reply;
use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['create','store']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 



    public function index(){

        return view('discussions.index', [

        'discussions' => Discussion::filterByChannels()->paginate(5)

        ]);
    }



    public function create(){
        return view('discussions.create');
    }

    public function store(CreateDiscussionRequest $request){

        auth()->user()->discussions()->create([

            'title' => $request->title,
            'content' => $request->content,
            'channel_id' => $request->channel,
            'slug' => str_slug($request->title)

        ]);

        session()->flash('success', 'Discussion Posted ..');

        return redirect()->route('discussions.index');
    }

    public function show(Discussion $discussion){

        return view('discussions.show', [
            'discussion' => $discussion
        ]);
    }

    public function reply(Discussion $discussion, Reply $reply){

        $discussion->markAsBestReply($reply);

        session()->flash('success', 'Marked successfully .');

        return redirect()->back();

    }


}
