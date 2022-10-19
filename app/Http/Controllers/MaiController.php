<?php

namespace App\Http\Controllers;

use App\Mail\infoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class MaiController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        $info = new \stdClass();
        $info->name = $data['name'];
        $info->phone = $data['phone'];
        $info->address = $data['address'];
        $info->message = $data['message'];

        Mail::to("minhnhat14713@gmail.com")->send(new infoMail($info));
    }
}
