<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $userCount = User::count() ?? 0;

            // Get the counts for different categories in the Tender model
            $localCount = Tender::where('Category', 1)->count() ?? 0;
            $foreignCount = Tender::where('Category', 2)->count() ?? 0;
            $otherCount = Tender::where('Category', 3)->count() ?? 0;

            // Pass the counts to the view
            return view('admin.home')->with(compact('userCount', 'localCount', 'foreignCount', 'otherCount'));
        }

        return redirect()->back()->withInput()->withErrors(['error' => 'Invalid credentials. Check your user E-Mail and Password']);
    }
    //pass dashboard count values
    public function dashboard()
    {
        $userCount = User::count() ?? 0;

        // Get the counts for different categories in the Tender model
        $localCount = Tender::where('Category', 1)->count() ?? 0;
        $foreignCount = Tender::where('Category', 2)->count() ?? 0;
        $otherCount = Tender::where('Category', 3)->count() ?? 0;

        // Pass the counts to the view
        return view('admin.home')->with(compact('userCount', 'localCount', 'foreignCount', 'otherCount'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function userdelete($id)
    {
        // Find the user record by ID
        $record = User::find($id);

        // Check if the email is the one you want to prevent from deletion
        if ($record && $record->email == 'mainadmin99@slpa.lk') {
            return redirect()->back()->with('error', 'Cannot delete Main Admin');
        }

        // If the email is not the one to be prevented, delete the user record
        if ($record) {
            $record->delete();
        }

        return redirect()->back();
    }

    public function usercreate(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'user' => 'boolean',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'admin' => (bool) $request->input('user'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('AdminUsers')->with('success', 'User added successfully!');

    }

    public function viewuser()
    {
        $user = User::paginate(7);
        return view('admin.users', compact('user'));

    }

    public function adduser()
    {
        return view('admin.adduser');
    }


}
