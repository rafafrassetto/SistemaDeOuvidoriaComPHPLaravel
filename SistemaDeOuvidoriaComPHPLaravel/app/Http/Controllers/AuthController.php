<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  
    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

     
        $user = DB::table('table_login')->where('email', $request->email)->first();

     
        if ($user && Hash::check($request->password, $user->password)) {
            return redirect('/ouvidoria');
        }

      
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }
}
