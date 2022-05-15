<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\User;
use App\Models\cheif;
use App\Models\order;
use App\Models\reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all()->except('usertype=="1"');
        return view('admin.userlist',compact('data'));
    }
    public function allreservation()
    {
        $data=reservation::all();
        return view('admin.allreservation',compact('data'));
    }
    public function delete($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'User Deleted');
    }
    public function deleteFood($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Food Deleted');
    }
    public function deleteBooking($id)
    {
        $data=reservation::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Food Deleted');
    }
    public function menu()
    {
        return view('admin.menuForm');
    }
    public function allmenu()
    {
        $food=food::all();
        return view('admin.allMenu',compact('food'));
    }
   
    public function upload(Request $request)
    {
        $food=new food;
        $food->title=$request->title;
        $food->price=$request->price;
        $food->description=$request->description;
       
        
        $image=$request->file;
        $imagename=time(). '.' . $image->getClientOriginalExtension();
        $request->file->move('foodimage',$imagename);
        $food->image= $imagename;


        $food->save();
        return redirect()->back()->with('message', 'Food Added Successfully');
    }
    

    public function updatefoodForm($id)
    {
        $data=food::find($id);
        return view('admin.updatefoodForm',compact('data'));
    }

    public function editfood(Request $request,$id)
    {
        $food=food::find($request->id);
        
        
        $food->title=$request->title;
        $food->price=$request->price;
        $food->description=$request->description;
       
        
        $image=$request->file;
        if ($image)
        {
        $imagename=time(). '.' . $image->getClientOriginalExtension();
        $request->file->move('foodimage',$imagename);
        $food->image= $imagename;
        }


        $food->save();
        return redirect()->back()->with('message', 'Food Updated Successfully');
    }

    //add cheif

    public function addcheif()
    {
        return view('admin.addcheif');
    }
    
    public function cheifupload(Request $request)
    {
        $data=new cheif;
        
        
        $data->name=$request->name;
        $data->job=$request->job;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->instagram=$request->instagram;
       
        
        $image=$request->file;
        if ($image)
        {
        $imagename=time(). '.' . $image->getClientOriginalExtension();
        $request->file->move('cheifimage',$imagename);
        $data->image= $imagename;
        }


        $data->save();
        return redirect()->back()->with('message', 'Food Updated Successfully');
    }

    public function allcheif()
    {
        $cheif=cheif::all();
        return view('admin.allcheif',compact('cheif'));
    }

    public function deletecheif($id)
    {
        $data=cheif::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Cheif Deleted');
    }

    public function updateCheifForm( $id)
    {
        $data=cheif::find($id);
        return view('admin.updateCheifForm',compact('data'));
        
        
       
    }

    public function cheifupdate(Request $request, $id)
    {
         $data=cheif::find($request->id);
        
        
        $data->name=$request->name;
        $data->job=$request->job;

        // $data->facebook=$request->facebook;
        // $data->twitter=$request->twitter;
        // $data->instagram=$request->instagram;
       
        
        $image=$request->file;
        if ($image) {
            
            
            $imagename=time(). '.' . $image->getClientOriginalExtension();
            $request->file->move('cheifimage',$imagename);
            $data->image= $imagename;
        }
        


        $data->save();
        return redirect()->back()->with('message', 'Food Updated Successfully');
    }

    public function order()
    {
        $data=order::all();
        return view('admin.orderlist',compact('data'));
    }
    public function search(Request $request)
    {
        $search=$request->search;
        $data =order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like','%'.$search.'%')->get();
        return view('admin.orderlist',compact('data'));
    }



    

}
