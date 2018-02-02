<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Promotion;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();

        return view('admin.promotion.index')->withPromotions($promotions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();

        return view('admin.promotion.create')->withMenus($menus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menus = Menu::all();
        $promotion = new Promotion();

        $promotion->menu_id = $request->menu_id;
        $promotion->name = $request->name;
        $promotion->description = $request->description;
        $promotion->image = $request->image;

        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('/images/'.$filename);
        Image::make($image)->resize(800, 400)->save($location);
        $promotion->image = $filename;

        $promotion->save();
        Session::flash('success', 'Promotion was successfully created!');

        return redirect()->route('admin.promotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        Storage::delete($promotion->image);

        $promotion->delete();

        Session::flash('success', 'Promotion was successfully deleted!');

        return redirect()->route('admin.promotion.index');
    }
}
