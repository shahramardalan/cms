<?php

namespace App\Controller;

use App\Model\Blog;

class BlogController extends BaseDashboardController
{
  public function show()
  {
    $blogs = Blog::all();

    /* print_r($blogs->toArray());

    die(); */

    return view('blogs.list', ['blogs' => $blogs]);
  }

  public function deleteBlog($id)
  {
    $blog = blog::find($id);
    $blog->delete();

    $_SESSION['success'] = 'blog deleted!';

    return redirect("/dashboard/blogs");
  }
  public function edit($id)
  {
    $blog = blog::find($id);
    if (!$blog) {
      redirect('/dashboard/blogs');
    }
    return view('blogs.edit', ['content' => $blog]);
  }

  public function viewContent($id)
  {
    $blog = blog::find($id);
    if (!$blog) {
      redirect('/dashboard/blogs');
    }
    return view('blogs.viewContent', ['blog' => $blog]);
  }

  public function create()
  {

    return view('blogs.create');
  }
  public function storeCreate()
  {
    $blog = new Blog();
    $blog->name = $_POST['name'];
    $blog->category = $_POST['category'];
    $blog->content = $_POST['content'];

    $blog->save();

    $_SESSION['success'] = 'blog created! ';

    return redirect("/dashboard/blogs");
  }





}