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
            'Email' => 'required |email',
            'Password' => 'required',
        ]);
   
        $user = User::where('Email','=',$request->Email)->first();
        if($user){
            if(Hash::check($request->Password, $user->Password)){
                //when password is true, let us store the user id into session in a variable named loginId
                $request->Session()->put('loggedUser', $user->id);
                return view('auth.information');
                // $user = Auth::user();
                // Session::put('username', $user->username);
                // return view('auth.information'); 
                // $data = $request->input();
                // $request->session()->put('dede', $data['Email']);
                // echo session('dede');

            }else{
                return back()->with('fail', 'wrong password');
            }

        }else{
            return back()->with('fail', 'This email is not registered');
        }
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
    //  $data = array();
    //  if(Session::has('loginId')){
    //     $data = User::where('id', '=', Session::get('loginId'))->first();
    //  }
    // $data= $request->input();
    // $request->session()->put('loginID', $data['Full_Name']);
    // echo session('loginID');
    // Session::put('loginID', $data['Full_Name']);
// return view('auth.information', compact($data));
$id = session('loggedUser');
$data = [''->User::where('id', $id)];
return view('auth.information',$data);

    }
} 
