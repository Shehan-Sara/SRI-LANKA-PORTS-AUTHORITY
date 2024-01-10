<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function foreign()
    {
        $tender = Tender::where('Category', 2) // to take foreign tenders
            ->where('Status', 0) //to take active trnders
            ->get();
        return view('foreign', compact('tender'));
    }

    public function local()
    {
        $tender = Tender::where('Category', 1) // to take local tenders
            ->where('Status', 0) //to take active trnders
            ->get();
        return view('local', compact('tender'));
    }

    public function other()
    {
        $tender = Tender::where('Category', 3) // to take other tenders
            ->where('Status', 0) //to take active trnders
            ->get();
        return view('other', compact('tender'));
    }


}
