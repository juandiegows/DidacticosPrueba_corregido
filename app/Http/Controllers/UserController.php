<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return View('user.index', ['users' => User::all()]);
    }
    public function activate(Int $id){
        $user = User::find($id);
        $user->active = 1;
        $user->save();
        return redirect('/dashboard/user');
    }
    public function suspend(Int $id){
        $user = User::find($id);
        $user->active = 0;
        $user->save();
        return redirect('/dashboard/user');
    }
    public function SignIn()
    {
        return View('user.sign_in');
    }
    public function login()
    {
        return View('user.login');
    }
    public function loginPost(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => "Este campo es requerido",
                'password.required' => "Este campo es requerido"
            ]
        );

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'active' => 1])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }



        return back()->withErrors([
            'error' => 'usuario o contraseña incorrectas o usuario inactivo',
        ]);
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function create(UserPostRequest $request)
    {
        User::create([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'birth_day' => $request->input('birth_day'),
            'role_id' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ]);



        return redirect(url('/'))->with('message', '¡La operación se completó con éxito!');
    }
}
