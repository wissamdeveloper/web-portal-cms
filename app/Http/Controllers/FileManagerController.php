<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function index(Request $request)
    {
        $typeSelected = in_array($request->type,['image','file']) ? $request->type : "image";
        return view('filemanager.index',[
            'types' => $this->types(),
            'typeSelected' => $typeSelected
        ]);
    }
    private function types(){
        return [
            'image' => trans('filemanager.form_control.select.type.option.image'),
            'file' => trans('filemanager.form_control.select.type.option.file')
        ];
    }
}
