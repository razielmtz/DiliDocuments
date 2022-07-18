<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Document;

use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    public function upload(){

        return view('documents.upload');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'file' => 'required|max:10000|mimes:doc,docx,pdf,jpg,png',
            'name' => ['required'],
            'document_type' => ['required'],
            'description' => ['required']
        ]);

        $file = $request->file;
        $filename = time() . '.'. $file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $formFields['file'] = $filename;

        $formFields['user_id'] = auth()->id();

        Document::create($formFields);

        return redirect('/documents');
    }

    public function show() {

        $data = Document::where('user_id', auth()->id())->get();

        return view('documents.show', compact('data'));
    }

    public function download($file){

        return response()->download(public_path('assets/' . $file));
    }

    public function view($id){

        $data = Document::find($id);

        if($data->user_id != auth()->id()) {
            abort(403, 'You need permissions to access this file.');
        }

        return view('documents.view', compact('data'));
    }

    public function delete(Document $document) {

        if(File::exists('assets\\'.$document->file)){
            File::delete('assets\\'.$document->file);
        }
        
        $document->delete();
        return redirect('/documents');
    }
}
