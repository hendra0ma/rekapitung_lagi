<?php

namespace App\Http\Responses;

use App\Models\Acakey;
use App\Models\Config;
use App\Models\MultiAdministrator;
use App\Models\Village;
use DomainException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        if(auth()->user()->role_id == 14){
            return redirect('c1-relawan');
        }
        if(auth()->user()->role_id == 15){
            return redirect('c1-banding');
        }
        $acaKey =  Acakey::where('user_id',auth()->user()->id)->where('kode',$request->acakey)->first();
         if($acaKey==null){
             Auth::logout();
             return redirect()->back()->with('error','Kode Aca yang anda masukan salah');
            }
            Acakey::where('kode',$request->acakey)->delete();

        if($request->commander !=null){
            Cookie::queue('commander',true);
            return redirect('redirect');
        }
        return redirect('redirect');

    }
}
