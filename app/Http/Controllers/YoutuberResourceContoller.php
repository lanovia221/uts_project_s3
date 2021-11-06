<?php

namespace App\Http\Controllers;

use App\Models\Youtubers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Content;

class YoutuberResourceContoller extends Controller
{

    public function index()
    {
        return view ("ListYoutube", [
            "title" => "ListYoutube",
            "pageTitle" => "ListYoutube",
            "youtube" => Youtubers::all() //allstore
        ]);
    }


    public function create()
    {
        return view ('CreateListYoutube', [
            'title' => "CreateListYoutube",
            'pagetitle'=>'CreateListYoutube',
            'content'=>Content::all()
        ]);
    }


    public function store(Request $request)
    {
        Youtubers::create(
            [
                'name'=>$request->name, //nama kolom tabel db => nama form  inputan
                'code'=>$request->code,
                'salary'=>$request->salary,
                'description'=>$request->description,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        return redirect(route('ListYoutube.index'));
    }

    
    public function show($code)
    {
        return view("ShowDetailListYoutuber", [ //sesuai nama file
            "title" => "ShowDetailListYoutuber",
            "pageTitle" => "ShowDetailListYoutuber",
            "youtube" => Youtubers::where('code', $code) -> get()->first()//mencari di kolom code dengan kata kunci $code
            //show detail
        ]);
    }


    public function edit($code)
    {
        // return view('EditListYoutube', compact('youtube', 'title')); //sesuain nama layout(view)
        return view("EditListYoutube", [ //sesuai nama file
            "title" => "EditListYoutube",
            "pageTitle" => "EditListYoutube",
            "youtube" => Youtubers::findOrFail($code)//mencari di kolom code dengan kata kunci $code
            //show detail
        ]);
    }


    public function update(Request $request, $code)
    {
        $youtube= Youtubers::findOrFail($code);
        $youtube->update(
            [
                'name'=>$request->name, //nama kolom tabel db => nama form  inputan
                'code'=>$request->code,
                'salary'=>$request->salary,
                'description'=>$request->description,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );
        return redirect(route('ListYoutube.index'));
    }


    public function destroy($code)
    {
        $youtube = Youtubers::findOrFail($code);
        $youtube->delete();
        return redirect(route('ListYoutube.index'));
    }
}
