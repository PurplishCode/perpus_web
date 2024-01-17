<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
*/

public function viewLogin()
{
    return view('pages.login_page');
}

public function viewRegister()
{
    return view('pages.register_page');
}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user,Request $request)
    {
try {
    
    $request->validate(
        ['username'=>'string|required|max:20|unique:users', 'email' => 'string   
        |required|max:30','password' => 'string|required|min:8','full_name'=> 'string|required|max:255', 'address' => 'string|required|max:255']
    
    );

    $data = [
 'username' => $request->username,
 'email' => $request->email,
 'password' => Hash::make($request->password),
 'full_name' => $request->full_name,
 'address' => $request->address,
 'role' => "pengguna"
    ];
    
    
    User::create($data);
    $infologin = [
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=>$request->password,
    ];
    
    if(Auth::attempt($infologin)) {
        return redirect()->route('login');
    } else {
        dd($infologin);
    }


session(['email' => $user->email]);
}catch(\Exception $e)
{
    dd($e->getMessage());
}

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    public function logout()
    {
      
            auth()->logout();
            session()->flush();
            return redirect('/users/login');
        }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function loginUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            $credentials = ["email" => $user->email, "password" => $request->password];
    
           

            if (Auth::attempt($credentials)) {
                if (auth()->check()) {
                    $userRole = auth()->user()->role;
                    Log::info("User role: $userRole");
                
    
                }
                
                if (auth()->user()->role == "pengguna") {
                   toast("Selamat Datang Pengguna!", "succesful");

                    return redirect()->route('user.home');
                } else if (auth()->user()->role == "petugas") {
                    toast("Selamat Datang Petugas!", "succesful");
                    
                    return redirect()->route('security.home');
                } else if (auth()->user()->role == "admin") {
                    toast("Selamat Datang Admin", "succesful");
                    
                    return redirect()->route('admin.home');
                }
            }
        }
    
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
    
}
