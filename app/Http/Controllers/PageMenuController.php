<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageMenuStoreRequest;
use App\Http\Requests\PageMenuUpdateRequest;
use App\Models\PageMenu;
use Illuminate\Http\Request;

class PageMenuController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = false;
        $pageMenus = PageMenu::all();

        return view('page-menu.index', compact('pageMenus', 'id'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PageMenu $menu)
    {
        $id = $menu->id;
        $pageMenus = PageMenu::all();
        return view('page-menu.index', compact('pageMenus', 'id'));
    }

    /**
     * @param \App\Http\Requests\PageMenuStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageMenuStoreRequest $request)
    {
        $header = $request->header;
        $footer = $request->footer;
        $pageMenu = PageMenu::create($request->validated());
        $pageMenu->update(['header' => $header ? true : false]);
        $pageMenu->update(['footer' => $footer ? true : false]);

        return redirect()->route('menus.index');
    }

    /**
     * @param \App\Http\Requests\PageMenuUpdateRequest $request
     * @param \App\Models\PageMenu $pageMenu
     * @return \Illuminate\Http\Response
     */
    public function update(PageMenuUpdateRequest $request, PageMenu $menu)
    {
        $header = $request->header;
        $footer = $request->footer;
        $menu->update($request->validated());
        $menu->update(['header' => $header ? true : false]);
        $menu->update(['footer' => $footer ? true : false]);

        return redirect()->route('menus.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PageMenu $pageMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PageMenu $pageMenu)
    {
        $pageMenu->delete();
    }
}
