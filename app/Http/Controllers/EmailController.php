<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function getAca(Request $request){
        $kode = rand(1000,9999);
        $details = [
        'title' => 'Mail from websitepercobaan.com',
        'kode' => $kode
        ];
       
        Mail::to($request->email)->send(new \App\Mail\AcaMail($details));
       
        return response()->json([
            'success'=>"Silahkan Cek email Anda"
            
        ],200);
        }
}
