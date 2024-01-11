<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexController extends MasterController
{
    public function __construct()
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menu()));
        $this->bar = 'right';
        $this->template = 'master.index';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'DnvMaster - Ваш источник знаний в Web-разработке';
        $this->keywords = 'HTML, CSS, JavaScript, PHP, Laravel, Node.js, Angular, React, Vue.js, Bootstrap, MySQL, Git, Back-end, Front-end';
        $this->description = 'Если Вы хотите иметь современный, высококачественный и функциональный веб-сайт, заходите к нам. Мы с удовольствием расскажем Вам, как воплотить ваши идеи в реальность и обеспечить успех в онлайн-мире.';

        $content = view('master.content')->render();
        $this->vars = Arr::add($this->vars,'content',$content);

        return $this->masterOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
