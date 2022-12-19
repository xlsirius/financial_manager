<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\User;

class Autenticar_Controller extends Controller
{

    public function guest()
    {
        $salida = shell_exec('git rev-list --count HEAD');
        $rv_1=5;$rv_2=0;$rv_3=1;
        $version= $rv_3.".".$rv_2.".".$rv_1;
        if ($salida>=2)
        {
            for ($i=1; $i <=$salida ; $i++)
            {
                $rv_1= $rv_1+1;
                if ($rv_1==10)
                {
                    $rv_2= $rv_2+1;
                    if ($rv_2==10)
                    {
                        $rv_3= $rv_3+1;
                    }
                }
            }
            $version= $rv_3.".".$rv_2.".".$rv_1;
        }
        return view('welcome',compact('version'));
    }

    public function getLogin(Request $request)
    {
        $credentials = request()->only('email', 'password');

        Validator::make($request->all(),
            [
                'email' => 'required|min:4|max:25',
                'password' => 'required|min:4|max:25',
            ])
            ->validateWithBag('login');


        if (Auth::attempt($credentials))
        {
            request()->session()->regenerate();
            return redirect('/')->withErrors('Bienvenido a nuestra comunidad.');

        }
        else
        {
            return redirect('/')->withErrors('Ingreso Invalido, No esta registrado en nuestra comunidad.');
        }
    }

    public function reg_User(Request $request)
    {

    }

}
