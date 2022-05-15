<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Event;
use App\Models\don;


class AdminController extends Controller
{
    //on va creer la fonction de la liste des users

    public function user()
    {
        $data = user::all();
        return view("admin.users", compact("data"));
    }
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        //redirection users page
        return redirect()->back();
    }


    public function deletemenu($id)
    {
        $data = product::find($id);
        $data->delete();
        //redirection users page
        return redirect()->back();
    }


    public function productmenu()
    {
        $data = product::all();
        return view("admin.productmenu", compact("data"));
    }
    public function upload(Request $request)
    {
        $data = new product;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('productimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function updateview($id)
    {
        $data = product::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data = product::find($id);
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('productimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }


    public function reservation(Request $request)
    {
        $data = new reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->qte = $request->qte;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }

    public function viewreservation()
    {
        $data = reservation::all();

        return view("admin.adminreservation", compact("data"));
    }

    public function viewevent()
    {
        $data = event::all();

        return view("admin.adminevent", compact("data"));
    }


    public function uploadevent(Request $request)
    {
        $data = new event;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('eventimage', $imagename);
        $data->image = $imagename;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }


    public function updateevent(Request $request, $id)
    {
        $data = event::find($id);
        return view("admin.updateevent", compact("data"));
    }

    public function updatexevent(Request $request, $id)
    {
        $data = event::find($id);
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('eventimage', $imagename);
            $data->image = $imagename;
        }
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function deleteevent($id)
    {
        $data = event::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function don(Request $request)
    {
        $data = new don;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->don = $request->don;
        $data->save();
        return redirect()->back();
    }
    public function viewdon()
    {
        $data = don::all();

        return view("admin.admindon", compact("data"));
    }
}
