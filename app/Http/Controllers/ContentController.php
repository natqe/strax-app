<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\ContentRequest,
    App\Menu,
    App\Content,
    Session;

class ContentController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

    public function index() {
        self::$data['content']=Content::all()->toArray();
        return view('cms.content', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('cms.add_content', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request) {
        Content::create($request->all());
        Session::flash('sm', 'New content created.');
        return redirect('cms/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.delete_content', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        self::$data['content'] = Content::find($id)->toArray();
        return view('cms.edit_content', self::$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, $id) {
        Content::findOrFail($id)->update($request->all());
        Session::flash('sm', 'Content is updated.');
        return redirect('cms/content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Content::destroy($id);
        Session::flash('sm', 'Content has been teleted.');
        return redirect('cms/content');
    }

}
