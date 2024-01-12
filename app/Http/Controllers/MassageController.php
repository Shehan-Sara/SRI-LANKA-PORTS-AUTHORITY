<?php

namespace App\Http\Controllers;

use App\Models\massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function sendmassage(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required|min:4|max:30',
            'mail' => 'required|email',
            'subject' => 'required|string|min:5|max:50',
            'massage' => 'required|string|min:10|max:200',
        ]);


        $msg = massage::create([
            'name' => $request->input('name'),
            'email' => $request->input('mail'),
            'subject' => $request->input('subject'),
            'massage' => $request->input('massage'),
        ]);

        return redirect()->route('Welcome')->with('success', 'Your massage was send');
    }

    public function viewmassage()
    {
        $massage = massage::paginate(5);
        return view('admin.massages', compact('massage'));
    }

    public function deletemassage($id)
    {
        $msg = massage::find($id);
        if ($msg) {
            $msg->delete();
        }

        return redirect()->back();
    }

    public function markasread()
    {
    }


}
