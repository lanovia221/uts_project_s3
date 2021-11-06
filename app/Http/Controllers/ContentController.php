<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Youtubers;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function index()
    {
        return view("ShowContent", [ //sesuai nama file
            "title" => "ShowContent",
            "pageTitle" => "ShowContent",
            "content" => Content::all() //allstore
        ]);
    }

    public function create()
    {
        return view ('CreateContent', [
            'title' => "CreateContent",
            'pagetitle'=>'CreateContent',
            'youtuber'=>Youtubers::all()
        ]);
    }


    public function store(Request $request)
    {
        Content::create(
            [
                'nama'=>$request->name, //nama kolom tabel db => nama form  inputan
                'durasi'=>$request->durasi,
                'jenis'=>$request->jenis,
                'youtuber'=>$request->youtuber,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        return redirect(route('ShowContent.index'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view("EditContent", [ //sesuai nama file
            "title" => "EditContent",
            "pageTitle" => "EditContent",
            "content" => Content::findOrFail($id),//mencari di kolom code dengan kata kunci $code
            "youtuber"=>Youtubers::all()
            //show detail
        ]);
    }


    public function update(Request $request, $id)
    {
        $content= Content::findOrFail($id);
        $content->update(
            [
                'nama'=>$request->name, //nama kolom tabel db => nama form  inputan
                'durasi'=>$request->durasi,
                'jenis'=>$request->jenis,
                'youtuber'=>$request->youtuber,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );
        return redirect(route('ShowContent.index'));
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        return redirect(route('ShowContent.index'));
    }
}
