<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function foreign()
    {
        $tenders = Tender::where('Category', 2) // to take foreign tenders
            ->where('Status', 0) //to take active trnders
            ->get();
        return view('admin.local', compact('tender'));
    }

    public function local()
    {
        $tenders = Tender::where('Category', 1) // to take foreign tenders
            ->where('Status', 1) //to take active trnders
            ->get();
        return view('admin.local', compact('tender'));
    }

    public function other()
    {
        $tenders = Tender::where('Category', 1) // to take foreign tenders
            ->where('Status', 3) //to take active trnders
            ->get();
        return view('admin.local', compact('tender'));
    }
}
