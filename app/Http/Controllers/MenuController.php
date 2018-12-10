<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\MenuRequest,
    App\Menu,
    Session;

class MenuController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index() {
        return view('cms.menu', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('cms.add_menu', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request) {
        Menu::create($request->all());
        Session::flash('sm', 'New menu link created.');
        return redirect('cms/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.delete_menu', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        self::$data['this_menu'] = Menu::find($id)->toArray();
        return view('cms.edit_menu', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id) {
        Menu::findOrFail($id)->update($request->all());
        Session::flash('sm', 'Menu link is updated.');
        return redirect('cms/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Menu::destroy($id);
        Session::flash('sm', 'Menu link has been teleted.');
        return redirect('cms/menu');
    }

}
