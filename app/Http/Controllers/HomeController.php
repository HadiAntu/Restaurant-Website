<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\cheif;
use App\Models\cart;
use App\Models\order;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()

    {
        $user_id=Auth::id();
        $count=cart::where('user_id',$user_id)->count();
        $data=food::all();
        $data2=cheif::all();
        return view('home', compact('data',('data2'),'count'));
    }

    public function redirects()
    {
        $data=food::all();
        $data2=cheif::all();

       $usertype= Auth::user()->usertype;
       if ($usertype =='1')
       {
           return view('admin.adminhome');
       } 
       else
       {
            $user_id=Auth::id();
            $count=cart::where('user_id',$user_id)->count();

           return view('home', compact('data','data2','count'));
       }
       
    }

    public function booking(Request $request)
    {
        $data=new reservation();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back()->with('message', 'Reservation Accepted');
    }

    public function addcart(Request $request,$id)
    {
      if (Auth::id())
      {
          $user_id=Auth::id();
          $foodid=$id;
          $quantity=$request->quantity;

          

          $cart =new cart;
          $cart->user_id= $user_id;
          $cart->food_id= $foodid;
          $cart->quantity=$quantity;

          $cart->save();

          return redirect()->back();
      }
      else
      {
          return redirect('/login');
      }
    }

    public function showcart(Request $req , $id)
    {
        $count=cart::where('user_id',$id)->count();
        if(Auth::id()==$id)
        {
        $data2=cart::select('*')->where('user_id','=',$id)->get();
        $data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();

        return view('cartdetails',compact('count','data','data2'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function remove($id)
    {
        $data=cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orderconfirm(Request $request)
    {
        foreach($request->foodname as $key =>$foodname)
        {
            $data= new order;
            $data->foodname=$foodname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            
            $data->name=$request->name;
            $data->phone=$request->phone;
            $data->address=$request->address;

            $data->save();
            return redirect()->back()->with('message', 'Order Confirmed');

        }
    }
}
