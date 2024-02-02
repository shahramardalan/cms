<?php

namespace App\Controller;

use App\Model\Menu;
use App\Model\Page;
use App\Model\User;


class PageController extends BaseDashboardController
{
    public function create(){

        return view('pages.create');
    }
    public function storeCreate()
    {
        $page = new Page();

        $page->name = $_POST['name'];
        $page->slug = $_POST['slug'];
        $page->content = $_POST['content'];

        $page->save();

        $_SESSION['success'] = 'Page created! ';

        return redirect("/dashboard/pages");
    }

    public function renderPage($slug){
        $page = Page::where('slug', '=', $slug)->first();
        
        if(!$page){
            redirect('/');
        }

        return view('pages.page', ['page' => $page]);
    }

    public function deletePage($id){
        $page = Page::find($id);
        $page->delete();

        $_SESSION['success'] = 'Page deleted! ';

        return redirect("/dashboard/pages");
    }
    public function edit($id){
        $page = Page::find($id);
        if(!$page){
            redirect('/dashboard/pages');
        }
        return view('pages.edit', ['content' => $page]);
    }

    public function update($id){

        $page =  Page::find($id);
        
        $page->name = $_POST['name'];
        $page->slug = $_POST['slug'];
        $page->content = $_POST['content'];

        $page->save();

        redirect('/dashboard/pages');
    }

    public function show(){

        $pages = Page::all();

        return view('pages.list', ['pages' => $pages]);
    }
}

