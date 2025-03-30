<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $param['data'] = Promotion::get();
        return view('promotion.index', $param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotion.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $title = $req->title;
        $description = $req->description;
        $image = $req->image;

        $baru               = new Promotion();
        $baru->title        = $title;
        $baru->description  = $description;
        $baru->image        = $image;
        $baru->save();

        return redirect('promotion');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = (int) $id;
        $param['detail'] = Promotion::findOrFail($id);
        return view('promotion.detail', $param);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = (int) $id;
        $param['edit'] = Promotion::findOrFail($id);
        return view('promotion.edit', $param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Promotion::findOrFail($id);
        $data->title = $request->newtitle;
        $data->description = $request->newdescription;
        $data->image = $request->newimage;
        $data->save();

        return redirect('/promotion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = (int) $id;
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        return redirect('/promotion')->with('success', 'Promotion deleted successfully!');
    }

}
