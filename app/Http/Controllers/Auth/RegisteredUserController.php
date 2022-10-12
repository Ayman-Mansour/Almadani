<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('employees.index',compact("users"));
    }

    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $new_user = new User;
            $new_user->name = $request->name;
            $new_user->email = $request->email;
            $new_user->password = Hash::make($request->password);
            $new_user->role = $request->role;
            $new_user->save();

        // event(new Registered($user));

        // Auth::login($user);

        return redirect("employees");
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('employees.details',compact('user'));
    }
}
