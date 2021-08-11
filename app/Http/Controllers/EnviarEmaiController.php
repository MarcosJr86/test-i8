<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EnviarEmaiController extends Controller
{
    public  function enviarEmailQueue(Request $request)
    {
        $details['email'] = $request->email;
        dispatch(new SendEmailJob($details));
        return redirect()->back()->with("success","Se ha enviado un correo con la información solicitada.");  
    }
}
