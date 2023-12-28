<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TenderController extends Controller
{
    public function addrecord(Request $request)
    {
        //dd($request->all());
        //$pdfName = $request->file('pdffile')->getClientOriginalName();
        //$request->file('pdffile')->move(public_path('pdf'), $pdfName);

        $tender = new Tender();
        $tender->TenderNo = $request->id;
        $tender->Name = $request->name;
        $tender->Description = $request->des;
        $tender->Type = $request->type;
        $tender->Category = $request->Category;
        $tender->Ammount = $request->amount;
        $tender->AttachmentPath = '/pdf/';
        $tender->AttachementName = '$pdfName';
        $tender->Status = $request->status;
        $tender->ClosedDate = $request->date;
        $tender->Author = $request->user;
        $tender->save();
    }

    public function viewLocal()
    {
        $tender = Tender::where('Category', 1)->get();
        return view('admin.local', compact('tender'));
    }

    public function viewForign()
    {
        $tender = Tender::where('Category', 2)->get();
        return view('admin.foreign', compact('tender'));
    }

    public function viewOther()
    {
        $tender = Tender::where('Category', 3)->get();
        return view('admin.other', compact('tender'));
    }

    public function deleteRecord($id)
    {
        $record = Tender::find($id);
        $record->delete();
        return redirect()->back();
    }

}
