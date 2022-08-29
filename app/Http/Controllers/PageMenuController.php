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
        $pageMenus = PageMenu::all();

        return view('page-menu.index', compact('pageMenu'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('page-menu.create');
    }

    /**
     * @param \App\Http\Requests\PageMenuStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageMenuStoreRequest $request)
    {
        $pageMenu = PageMenu::create($request->validated());

        return redirect()->route('page-menu.index');
    }

    /**
     * @param \App\Http\Requests\PageMenuUpdateRequest $request
     * @param \App\Models\PageMenu $pageMenu
     * @return \Illuminate\Http\Response
     */
    public function update(PageMenuUpdateRequest $request, PageMenu $pageMenu)
    {
        $pageMenu->update($request->validated());

        return view('page-menu.update', compact('pageMenu'));

        return redirect()->route('page-menu.index');
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
