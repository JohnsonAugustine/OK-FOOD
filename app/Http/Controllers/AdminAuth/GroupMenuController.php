<?php

namespace App\Http\Controllers\AdminAuth;

use App\GroupMenu;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;

class GroupMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = GroupMenu::paginate(10);

        return view('admin.group.index')->withGroups($groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group.create');
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
        $group = new GroupMenu();

        $group->name = $request->name;

        $icon = $request->file('icon');
        $filename = time().'.'.$icon->getClientOriginalExtension();
        $location = public_path('/images/'.$filename);
        Image::make($icon)->save($location);
        $group->icon = $filename;

        $group->save();
        Session::flash('success', 'Group was successfully created!');

        return redirect()->route('admin.group.index');
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
        $group = GroupMenu::find($id);

        return view('admin.group.edit')->withGroup($group);
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
        $this->validate($request, [
            'name'  => 'required|max:255',
            'image' => 'required',
          ]);

        $group = GroupMenu::find($id);

        $group->name = $request->input('name');
        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->save($location);
            $oldFilename = $group->icon;
            $group->icon = $filename;
            Storage::delete($oldFilename);
        }
        $group->save();

        Session::flash('success', 'Type was successfully updated!');

        return redirect()->route('admin.group.index');
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
        $group = GroupMenu::find($id);
        Storage::delete($group->icon);

        $group->delete();

        Session::flash('success', 'Group was successfully deleted!');

        return redirect()->route('admin.group.index');
    }
}
