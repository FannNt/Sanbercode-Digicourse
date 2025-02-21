<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index(){
    $casts = DB::table('casts')->get();

    return view('cast', compact('casts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:3|max:50',
            'age' => 'integer|required',
            'bio' => 'string|required'
        ]);

        $query = DB::table('casts')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'bio' => $request->bio
        ]);
        return redirect(route('index'));
    }

    public function create()
    {
        return view('cast-form');
    }

    public function show($id)
    {
        $cast = DB::table('casts')->where('id',$id)->first();
        return view('cast-show',compact('cast'));
    }

    public function edit($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();

        return view('cast-edit',compact('cast'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:3|max:50',
            'age' => 'integer|required',
            'bio' => 'string|required'
        ]);
        $query = DB::table('casts')->where('id',$id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'bio' => $request->bio
        ]);
        $cast = DB::table('casts')->where('id',$id)->first();
        return view('cast-show', compact('cast'));
    }

    public function delete($id)
    {
        $query = DB::table('casts')->where('id',$id)->delete();
        return redirect(route('index'));
    }
}
