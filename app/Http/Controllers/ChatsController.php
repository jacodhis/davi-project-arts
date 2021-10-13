<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\at;
use App\Models\chat;

class ChatsController extends Controller
{
    //
    public function chart(Request $request, $art){
        $art = at::findorFail($art);

        $this->validate($request,[
            'body'=> 'required'
           ]);
        //    dd($art);
          
           $comment = new chat();
           $comment->body = $request->input('body');
           $comment->user_id = auth()->user()->id;
           $art->comments()->save($comment);
   
           return back()->with('success','chat sent successfully');

    }
    public function chartreply(Request $request, $chat){
      
       
      
        $this->validate($request,[
         'body'=> 'required'
        ]);
        $chat = chat::findorFail($chat);
       
        $reply = new chat();
        $reply->body = $request->input('body');
        $reply->user_id = auth()->user()->id;
        $chat->comments()->save($reply);

        return back()->with('success','reply posted');

    }
}
