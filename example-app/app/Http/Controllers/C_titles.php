<?php

namespace App\Http\Controllers;

use App\Models\M_titles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class C_titles extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session(['key' => 'value']);
        $data['titles'] = M_titles::all();
        return view('titles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tit_name = $request->input('tit_name');
        $tit_is_active = $request->input('tit_is_active');
        if ($tit_is_active == "on") {
            $tit_is_active = 1;
        } else {
            $tit_is_active = 0;
        }

        if ($request->hasFile('tit_image')) {
            $tit_image = $request->file("tit_image")->store('public/titles');
        }

        $m_titles = new M_titles();
        $m_titles->tit_name = $tit_name;
        $m_titles->tit_is_active = $tit_is_active;
        $m_titles->tit_image = $tit_image;

        $m_titles->save();
        // use Illuminate\Support\Facades\Redirect;
        return Redirect::to('/titles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data['title_id'] = M_titles::find($id);
        $data['titles'] = M_titles::all();
        return view('titles.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tit_name = $request->input('tit_name');
        $tit_is_active = $request->input('tit_is_active');
        if ($tit_is_active == "on") {
            $tit_is_active = 1;
        } else {
            $tit_is_active = 0;
        }
        $m_titles = M_titles::find($id);
        $m_titles->tit_name = $tit_name;
        $m_titles->tit_is_active = $tit_is_active;
        $m_titles->save();
        // use Illuminate\Support\Facades\Redirect;
        return Redirect::to('/titles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //.
        $m_titles = M_titles::find($id);
        $m_titles->delete();
        //   return Redirect::to('/titles');
    }
}
