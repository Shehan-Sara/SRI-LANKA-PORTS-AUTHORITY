<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TenderController extends Controller
{
    public function addrecord(Request $request)
    {

        $request->validate([
            'id' => 'required|min:1|max:30',
            'name' => 'required|min:5|max:30',
            'des' => 'required|min:5|max:100',
            'type' => 'required',
            'Category' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required',
            'date' => 'required',
        ]);

        $pdf = "empty";

        if ($request->hasFile('pdffile') && $request->file('pdffile')->isValid()) {
            $request->file('pdffile')->move(public_path('pdf'), $request->id . '.pdf');
            $pdf = $request->id;
        }
        //dd($request->all());

        $tender = new Tender();
        $tender->TenderNo = $request->id;
        $tender->Name = $request->name;
        $tender->Description = $request->des;
        $tender->Type = $request->type;
        $tender->Category = $request->Category;
        $tender->Ammount = $request->amount;
        $tender->AttachmentPath = '/pdf/' . $pdf . '.pdf';
        $tender->AttachementName = $pdf;
        $tender->Status = $request->status;
        $tender->ClosedDate = $request->date;
        $tender->Author = $request->user;
        $tender->save();

        return view('admin.home');
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
        $record = Tender::orderBy('id', 'asc')->find($id);
        $record->delete();
        return redirect()->back();
    }

}
