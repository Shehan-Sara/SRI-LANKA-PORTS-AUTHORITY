<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TenderController extends Controller
{
    public function newrecord()
    {
        return view('admin.insert');
    }
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


        //dd($request->all());

        $tender = new Tender();
        $tender->TenderNo = $request->id;
        $tender->Name = $request->name;

        if (Tender::where('TenderNo', $tender->TenderNo)->exists()) {
            return redirect()->back()->with('error', 'TenderNo already exists.');
        }

        $tender->Description = $request->des;
        $tender->Type = $request->type;
        $tender->Category = $request->Category;
        $tender->Ammount = $request->amount;
        if ($request->hasFile('pdffile') && $request->file('pdffile')->isValid()) {
            $request->file('pdffile')->move(public_path('pdf'), $request->id . '.pdf');
            $pdf = $request->id;
            $tender->AttachmentPath = '/pdf/' . $pdf . '.pdf';
        }
        $tender->AttachementName = $pdf;
        $tender->Status = $request->status;
        $tender->ClosedDate = $request->date;
        $tender->Author = $request->user;
        $tender->save();

        if ($request->Category == '1') {
            return redirect()->route('AdminLocal')->with('success', 'Local Tender added successfully!');
        } else if ($request->Category == '2') {
            return redirect()->route('AdminForeign')->with('success', 'Foreign Tender added successfully!');
        } else if ($request->Category == '3') {
            return redirect()->route('AdminOther')->with('success', 'Other Tender added successfully!');
        } else {
            return redirect()->route('AdminHome')->with('success', 'Tender added successfully!');
        }
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

        if ($record) {
            // Delete the file if it exists
            if (!empty($record->AttachmentPath)) {
                $filePath = public_path($record->AttachmentPath);

                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }

            $record->delete();
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Record didnt found');
    }

    public function auditlog($massage)
    {
        //not created yet
    }

}
