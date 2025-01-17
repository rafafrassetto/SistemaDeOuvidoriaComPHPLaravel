<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $response = Http::withHeaders([
            'apikey' => env('SUPABASE_API_KEY'),
            'Authorization' => 'Bearer ' . env('SUPABASE_API_KEY'),
        ])->post(env('SUPABASE_URL') . '/rest/v1/users', [
            'email' => $request->email,
        ]);

        if ($response->successful()) {
            
            return redirect('/ouvidoria');
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }
}
