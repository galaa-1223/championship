<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bank;

class UsersController extends Controller
{
    public function index() 
    {
        $banks = Bank::all();

        $user = User::whereId(Auth::user()->id)->first();

        return view('site.users.personal',[
            'user'  => $user,
            'banks' => $banks
        ]);
    }

    public function idcard()
    {
        return view('site.users.idcard');
    }

    public function contract()
    {
        return view('site.users.contract');
    }

    public function finish()
    {
        return view('site.users.finish');
    }

    public function personalSave(Request $request)
    {
        // dd($request);
        $user = User::whereId(Auth::user()->id)->update([
            "lastname"    => "Цэрэнханд",
            "firstname"   => "Галбадрах",
            "register"    => "ЧЛ22222222",
            "job"         => "fdsa",
            "phone"       => "88996455",
            "email"       => "galaa.1223@yahoo.com",
            "nickname"    => "Noob",
            "is_internal" => "yes",
            "is_foreign"  => "yes"
        ]);

        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function nicknameCheck(Request $request)
    {
        // if(isset($request->nickname)){

        $count = User::where("nickname", $request->nickname)->count();

        echo $count;

        if($count > 0){
            $response = "not_available";
        }else{
            
            $response = "false";
        }

        echo $response;

    }

    public function idcardSave(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'photos'=>'required',
        //     ]);
        // if($request->hasFile('photos'))
        // {
            // $allowedfileExtension=['pdf','jpg','png','docx'];

            // $file = $request->file('photos');

            // $filename = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();

            // $check = in_array($extension,$allowedfileExtension);
            
            // dd($check);
            // if($check)
            // {
            // $items= Item::create($request->all());
            // foreach ($request->photos as $photo) {
            // $filename = $photo->store('photos');

        // }
        // $request->validate([
        //     'idcard_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        
        $request->validate([
            'idcard_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idcard_back'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'signiture'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $time = time();

        $imageName1 = $time.'-front.'.$request->idcard_front->extension();
        $imageName2 = $time.'-back.'.$request->idcard_back->extension();
        $imageName3 = $time.'-signiture.'.$request->signiture->extension();  

        $request->idcard_front->move(public_path('uploads'), $imageName1);
        $request->idcard_back->move(public_path('uploads'), $imageName2);
        $request->signiture->move(public_path('uploads'), $imageName3);
    
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName); 
        // dd($imageName);
    }

    
}
