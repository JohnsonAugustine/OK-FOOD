<?php

namespace App\Http\Controllers\AdminAuth;

use App\Menu;
use App\Promotion;
use App\Restaurant;
use App\Merchant;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();

        return view('admin.promotions.index')->withPromotions($promotions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();

        return view('admin.promotions.create')->withRestaurants($restaurants);
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
        $restaurants = Restaurant::all();
        $promotion = new Promotion();

        $promotion->restaurant_id = $request->restaurant_id;
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

        return redirect()->route('admin.promotions.index');
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
        $promotion = Promotion::find($id);
        return view('admin.promotions.edit')->with(['promotion' => $promotion]);
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
        $promotion = Promotion::find($id);
        $promotion->name = $request->input('name');
        $promotion->description = $request->input('description');
        $promotion->save();

        return redirect()->route('admin.promotions.index');
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

        return redirect()->route('admin.promotions.index');
    }
}
