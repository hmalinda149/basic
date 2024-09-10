<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function add_data()
    {
        if(Auth::id())
        {
            return view('admin.add_data');
        }
        else
        {
            return redirect('/login');
        }

    }

    public function upload_data(Request $request)
    {
        if(Auth::id())
        {
            $data = new Details;

            $data->name = $request->name;
            $data->address = $request->address;
            $data->age = $request->age;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->gender = $request->gender;

            $image = $request->image;
            if($image){

                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('upImg',$imagename);
                $data->image = $imagename;
            }

            $data->save();
            return redirect('/view_data');
        }
        else
        {
            return redirect('/login');
        }



    }
    // public function update_details($id,Request $request)
    // {
    //     if(Auth::id())
    //     {
    //         $data = Details::find($id);

    //         $data->name = $request->name;
    //         $data->address = $request->address;
    //         $data->age = $request->age;
    //         $data->phone = $request->phone;
    //         $data->email = $request->email;
    //         $data->gender = $request->gender;

    //         $image=$request->image;

    //         if($image)
    //         {
    //             $imgname = time().'.'.$image->getClientOriginalExtension();
    //             $request->image->move('upImg',$imgname);
    //             $imgname = $data->image;
    //         }

    //         $data->save();
    //         return redirect('/view_data');
    //     }
    //     else
    //     {
    //         return redirect('/login');
    //     }


    // }
    public function update_details($id, Request $request)
{
    if (Auth::id()) {
        $data = Details::find($id);

        // Update other details
        $data->name = $request->name;
        $data->address = $request->address;
        $data->age = $request->age;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->gender = $request->gender;

        // Handle image upload
        $image = $request->image;
        if ($image) {
            $imgname = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('upImg', $imgname);

            // Update the image field in the database
            $data->image = $imgname;
        }

        $data->save();

        return redirect('/view_data');
    } else {
        return redirect('/login');
    }
}


    public function view_data()
    {
        if(Auth::id())
        {
            $data = Details::all();
            return view('admin.view_data',compact('data'));
        }
        else
        {
            return redirect('/login');
        }

    }
    public function edit_data($id)
    {
        if(Auth::id())
        {
            $data1=Details::find($id);

            return view('admin.edit_data',compact('data1'));
        }
        else
        {
            return redirect('/login');
        }

    }



    public function delete($id)
    {
        if(Auth::id())
        {
            $data = Details::find($id);
            $data->delete();
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }

    }
}
