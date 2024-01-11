<?php

namespace App\Http\Controllers;

use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Lavary\Menu\Menu;

class MasterController extends Controller
{
    protected $title;
    protected $keywords;
    protected $description;
    protected $template;
    protected $vars = array();
    protected $bar = 'no';
    protected $menusRepository;
    protected $leftContent = false;
    protected $rightContent = false;
    public function __construct(MenusRepository $menusRepository)
    {
        $this->menusRepository = $menusRepository;
    }
    protected function masterOutput()
    {
        $this->vars = Arr::add($this->vars,'bar',$this->bar);
        $this->vars = Arr::add($this->vars,'title',$this->title);
        $this->vars = Arr::add($this->vars,'keywords',$this->keywords);
        $this->vars = Arr::add($this->vars,'description',$this->description);

        $menu = $this->getMenus();
        $navigation = view('master.navigation')->with('menu',$menu)->render();
        $this->vars = Arr::add($this->vars,'navigation',$navigation);

        $footer = view('master.footer')->render();
        $this->vars = Arr::add($this->vars,'footer',$footer);

        return view($this->template)->with($this->vars);
    }
    protected function getMenus()
    {
        $menu = $this->menusRepository->get();
		/* Lavary Laravel-menu
        $mBuilder = (new Menu)->make('MyNav', function ($m) use ($menu)
        {
            foreach ($menu as $item) {
                if ($item->parent == 0) {
                    $m->add($item->title,$item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }
                }
            }
        });
		*/
        return $menu;
    }
}
