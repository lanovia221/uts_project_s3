<?php

namespace App\Http\Controllers;

use App\Models\Youtubers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class YoutuberController extends Controller
{

    public function index()
    {
        return view("ListYoutube", [ //sesuai nama file
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

        ]);
    }


    public function store(Request $request)
    {
        $code = Str::lower(Str::substr($request->name, 0, 3));
        Youtubers::create(
            [
                'name'=>$request->name, //nama kolom tabel db => nama form  inputan
                'code'=>$code,
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
        ]);
    }


    public function edit($code)
    {
        $Youtube = Youtubers::findOrFail($code);
        $title = "ListYoutube";
        return view('EditListYoutube', compact('Youtube', 'title')); //sesuain nama layout(view)
    }


    public function update(Request $request, $code) //createpost
    {
        $data = $request->input();
        DB::table('youtuber')->insert(
            array(
                'no' => $data['no'],
                'name' => $data['name'],
                'code' => $data['code'],
                'salary' => $data['salary'],
                'description' => $data['description'],
                'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
            )
        );

        return redirect('/ListYoutube');
    }

    public function destroy($code)
    {
        //
    }
}
