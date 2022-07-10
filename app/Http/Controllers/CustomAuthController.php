<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'Email' => 'required',
            'Password' => 'required',
        ]);
   
        $credentials = $request->only('Email', 'Password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.login');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
        'Full_Name'=>'required',
        'Email'=>'required|Email|unique:users',
        'Password'=>'required|min:5|max:12',
        'Age'=>'required',
        'Location'=>'required',
        'Gender'=>'required',
]);
       
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'Full_Name' => $data['Full_Name'],
        'Email' => $data['Email'],
        'Password' => Hash::make($data['Password']),
        'Age' => $data['Age'],
        'Location' => $data['Location'],
        'Gender' => $data['Gender']
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    
    public function CustomInformation()
    {
        return view('user.information');
    }
}