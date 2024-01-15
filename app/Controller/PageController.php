<?php

namespace App\Controller;

use App\Model\Page;


class PageController
{
    public function createPage()
    {
        $page = new Page();

        $page->name = $_POST['name'];
        $page->url = $_POST['url'];
        $page->content = $_POST['content'];

        $page->save();
    }

    public function renderAbout(){
        $page = Page::where('url', '=', 'about')->first();
        return view('pages.about', ['content' => $page]);
    }

    public function deletePage($id){
        $page = Page::find($id);

        $page->delete();

    }
    public function edit($id){
        $page = Page::find($id);
        return view('pages.edit', ['content' => $page]);
    }

    public function update($id){
        $page =  Page::find($id);
        
        $page->name = $_POST['name'];
        $page->url = $_POST['url'];
        $page->content = $_POST['content'];

        $page->save();
    }
}

