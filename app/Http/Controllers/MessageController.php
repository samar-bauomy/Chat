<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    public function conversation($userId){
        $users =User::where('id' ,'!=' , Auth::id())->get();
        $friendInfo =User::findOrFail($userId);
        $myInfo =User::find(Auth::id());

        $this->data['users'] = $users;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;
        $this->data['users'] = $users;
        $this->data['userId'] = $userId;


        return view('message.conversation' , $this->data);
    }
}
