<?php

namespace App\Http\Controllers;

use App\Models\massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function sendmassage()
    {
    }

    public function viewmassage()
    {
        $msg = massage::get();
        return view('admin.massages', compact('massage'));
    }

    public function deletemassage()
    {
    }

    public function markasread()
    {
    }


}
