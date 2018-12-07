<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Hash;


class UserController extends Controller
{
    function __construct()
    {
        $this->middleware("auth");
    }
    public function index(){
        $listusers = User::all();
        
        return view('admin.users', ['users' => $listusers]);
    }
    public function destroy(Request $request, $id){
        $user = User::find($id);
        
        $user->delete();
        
        session()->flash('delete', 'User has been deleted successfully.');
        
        return redirect('admin/users');
    }

    public function editsettings(Request $request){
        if (empty($request->input('username')) or empty($request->input('email'))) {
           session()->flash('info', 'There is some error.');
        }else{
            $user = User::find(Auth::user()->id)->first();

            $user->name = $request->input('username');
            $user->email = $request->input('email');

            $user->save();

            session()->flash('success', 'Your information has been updated.');
        }

        return redirect('/account');
    }
    public function editpassword(Request $request)
    {
        if (!empty($request->input('old')) or !empty($request->input('newpass')) or !empty($request->input('repass'))) {
            $user = User::find(Auth::user()->id)->first();
            if (Hash::check($request->input('old'), Auth::user()->password)) {
                if (($request->input('newpass') == $request->input('repass')) and !empty($request->input('newpass')) or !empty($request->input('repass'))) {

                    $user->password = bcrypt($request->input('newpass'));
                    $user->save();
                    session()->flash('success', 'Your Passwordas has been updated.');
                }else{
                     session()->flash('info', 'Repeated password didnt much.');   
                }
            }else{
                session()->flash('info', 'The old password didn\'t muche .');
            }
        }else{
            session()->flash('info', 'Dude! insert some Data.');
        }

        return redirect('/account');
    }

    public function imageCropPost(Request $request) {
        
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/storage/image/" . $image_name;

        $pathdb = "image/" . $image_name;

        file_put_contents($path, $data);

        $user = User::find(Auth::user()->id)->first();
        $user->user_img = $pathdb;

        if($user->save()){
          return response()->json(['status'=>true]);
        }else {
            response()->json(['status'=>false]);
        }

    }

}

