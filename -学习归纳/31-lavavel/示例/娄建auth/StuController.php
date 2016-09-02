<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Stu;
//use Request,Validator;
use App\Http\Controllers\Auth;
class StuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stu = new Stu();
        //$list = $stu -> paginate(3);
        //dd($list);

        if(@$_GET['search'] != null){
            $list = $stu -> where('name','like','%'.@$_GET['search'].'%') -> paginate(3);
        }else{
            $list = $stu -> paginate(3);
        }

        if(\Auth::check()){
            $user = \Session::get('user');
            return view('Stu/index',['stus'=>$list,'user'=>$user]);
        }else{
            return view('Stu/index',['stus'=>$list,'user'=>'未登录']);
        }
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('Stu/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $data = array();
       $stu = new Stu();
       $data['name'] = \Request::input('name');
       $data['age'] = \Request::input('age');
       $data['sex'] = \Request::input('sex');
       $data['classid'] = \Request::input('classid');
       $stu -> insert($data);
       return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $stu = new Stu();
        $s = $stu -> find($id);
        return view('Stu/edit',['stu'=>$s]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $stu = new Stu();
        $s = $stu -> find($id);
        $s -> name = \Request::input('name');
        $s -> age = \Request::input('age');
        $s -> sex = \Request::input('sex');
        $s -> classid = \Request::input('classid');
        $s -> save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $stu = new Stu();
        $stu -> find($id) -> delete();
        return redirect('/');
    }
    public function doLogin(){
        // $username = \Request::input('username');
        // $password = \Request::input('pwd');
        //$info = \Request::input();
        // $validator = \Validator::make($info,[
        //         //'username' => 'required|between:4,16|exists:user,username,password,'.\Request::input('passowrd')."'"
        //     'username'=>'required|between:4,16|exists:user,username,password,1233'
        //         //'password' => 'required'
        //     ]);
        // if($validator -> fails()){
        //     return $validator -> errors();
        //     return '登录失败！';
        // }else{
        //     return redirect('Stu/index');
        // }

        //dd($_POST);
        $username = \Request::input('username');
        $pwd = \Request::input('password');
        //$password = \Hash::make($pwd);
        if (\Auth::attempt(['username' => $username,'password' => $pwd])) {
            // 认证通过...
            //return redirect()->intended('dashboard');
            \Session::put(['user'=>$username]);
            return redirect('/');
        }else{
           dd($_POST);
        }
    

    }
    public function doSignup(){
        $data = array();
        $data['username'] = \Request::input('username');
        $data['password'] = \Hash::make(\Request::input('password'));
        $info = \Request::input();
        $validator = \Validator::make($info,[
                'username' => 'required|between:4,32|unique:users',
                'password' => 'required|between:4,32'
            ]);
        if($validator -> fails()){
            return '注册失败！';
        }else{
            \DB::table('users')->insert($data);
            return redirect('/');
        }

    }
    public function doState(){
        $now = \Auth::check();
        dd($now);
    }
    public function cancel(){
        if(\Auth::check()){
            $_SESSION = null;
           // $_COOKIE = null;
            //\Session::forget('user');
            \Auth::logout();
           
        }
        return \Redirect::to('/');
    }

}
