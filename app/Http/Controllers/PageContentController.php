<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageContentStoreRequest;
use App\Http\Requests\PageContentUpdateRequest;
use App\Models\PageContent;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageContents = PageContent::all();
        $pageName = null;
        $sectionName = null;

        return view('page-content.index', compact('pageContents', 'pageName', 'sectionName'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pageName = $request->page;
        $sectionName = $request->section;

        return view('page-content.create', compact('pageName', 'sectionName'));
    }

    public function edit(Request $request, PageContent $page)
    {
        $pageName = $page->page_name;
        $sectionName = $page->section_name;


        return view('page-content.edit', compact('page', 'pageName', 'sectionName'));
    }

    /**
     * @param \App\Http\Requests\PageContentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageContentStoreRequest $request)
    {
        $isValid = true;
        $sectionName = $request->section_name;

        $isValid = $this->isValidBySection($request, $sectionName);

        if (!$isValid) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de l\'enregistrement']);
        }
        if ($request->link) {
            $request->merge(['link' => route($request->link)]);
        }
        $imagePath = Controller::uploadFile($request, 'image');

        $pageContent = PageContent::create([
            'page_name' => $request->page_name,
            'section_name' => $sectionName,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'link' => $request->link,
            'link_text' => $request->link_text,
        ]);

        return redirect()->route('pages.index');
    }

    /**
     * @param \App\Http\Requests\PageContentUpdateRequest $request
     * @param \App\Models\PageContent $pageContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageContent $page)
    {
        $isValid = true;
        $sectionName = $page->section_name;

        $isValid = $this->isValidBySection($request, $sectionName);

        if (!$isValid) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de l\'enregistrement']);
        }
        if ($request->link) {
            $request->merge(['link' => route($request->link)]);
        }
        $imagePath = Controller::uploadFile($request, 'image', $page->image);

        $page->update([
            'page_name' => $request->page_name,
            'section_name' => $sectionName,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath ? $imagePath : $page->image,
            'link' => $request->link,
            'link_text' => $request->link_text,
        ]);

        return redirect()->route('pages.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PageContent $pageContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PageContent $page)
    {
        Controller::deleteFile($page->image);
        $page->delete();
        return redirect()->route('pages.index');
    }

    public $validSectionNameByPage = [
        'about' => ['about-main', 'about-content'],
        'home' => ['home-about', 'home-presentation'],
        'projects' => ['projects-galery']
    ];

    public function isValidBySection($request, $sectionName)
    {
        $isValid = true;

        $inputTitle = $request->title ? true : false;
        $inputContent = $request->title ? true : false;
        $inputImage = $request->title ? true : false;
        $inputLink = $request->title ? true : false;
        $inputLinkText = $request->title ? true : false;

        switch ($sectionName) {
            case 'home-about':
                if (!($inputTitle && $inputContent && $inputImage && $inputLink && $inputLinkText)) {
                    $isValid = false;
                }
                break;
            case 'home-presentation':
                if (!($inputTitle && $inputContent && $inputImage && $inputLink)) {
                    $isValid = false;
                }
                break;
            case 'about-main':
                if (!($inputTitle && $inputContent && $inputImage)) {
                    $isValid = false;
                }
                break;
            case 'about-content':
                if (!($inputTitle && $inputContent)) {
                    $isValid = false;
                }
                break;
            case 'projects-galery':
                if (!($inputTitle && $inputImage && $inputContent)) {
                    $isValid = false;
                }
                break;
            default:
                break;
        }

        return $isValid;
    }
}
