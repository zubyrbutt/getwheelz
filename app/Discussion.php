<?php

namespace App;

use App\User;
use App\Reply;
use App\Channel;


class Discussion extends Model
{

    public function author(){
        
        return $this->belongsTo(User::class, 'user_id');
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }


    public function scopeFilterByChannels($builder)

    {
        if(request()->query('channel')){

            $channel = Channel::where('slug', request()->query('channel'))->first();

            if($channel){
                return $builder->where('channel_id', $channel->id);
            }

            return $builder;
        }

        return $builder;
    }



    //use for slug
    public function getRouteKeyName()
    {
        return 'slug';
        
    }

    public function bestReply(){

        return $this->belongsTo(Reply::class, 'reply_id');
    }

    public function markAsBestReply(Reply $reply){
        $this->update([

            'reply_id' => $reply->id

        ]);
    }
}
