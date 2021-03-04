<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Events\ChatEvent;


class ChatsController extends Controller
{
    public function index()
    {
        return view('chat.chat');
    }

    public function fetchAllMessages()
    {

        return Chat::with('user')->get();

    }

    public function sendMessage(Request $request)
    {
        $chat = auth()->user()->messages()->create([
            'message' => $request->message
        ]);

        broadcast(new ChatEvent($chat->load('user')))->toOthers();

        return ['status' => 'success'];
    }
}
