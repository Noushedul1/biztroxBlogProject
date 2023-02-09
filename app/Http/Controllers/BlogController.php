<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
use Auth;

class BlogController extends Controller
{
    public $categories;
    public $blog;
    public $blogs;
    public $image;
    public $imageName;
    public $imageUrl;
    public $directory;
    public $message;
    public function index()
    {
        // return Auth::user()->id;
        $this->categories = Category::all();
        return view('admin.blog.add',['categories'=>$this->categories]);
    }
    public function getImageUrl($request)
    {
        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'blog-images/';
        $this->image->move($this->directory,$this->imageName);
        $this->imageUrl = $this->directory.$this->imageName;
        return $this->imageUrl;
    }
    public function create(Request $request,FlasherInterface $flasher)
    {
        // return $request->all();
        $this->blog = new Blog();
        $this->blog->category_id = $request->category_id;
        $this->blog->author_id = Auth::user()->id;
        $this->blog->main_title = $request->main_title;
        $this->blog->sub_title = $request->sub_title;
        $this->blog->short_description = $request->short_description;
        $this->blog->long_description = $request->long_description;
        $this->blog->image = $this->getImageUrl($request);
        $this->blog->save();
        $flasher->addSuccess('Blog Added Successfully');
        return redirect()->back();
    }
    public function manage()
    {
        $this->blogs = Blog::orderBy('id','asc')->get();
        return view('admin.blog.manage',['blogs'=>$this->blogs]);
    }
    public function edit($id,FlasherInterface $flasher)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('admin.blog.edit',['blog'=>$this->blog,'categories'=>$this->categories]);
    }
    public function update(Request $request,$id,FlasherInterface $flasher)
    {
        $this->blog = Blog::find($id);
        if($request->file('image'))
        {
            if(file_exists($this->blog->image))
            {
                unlink($this->blog->image);
            }
            $this->imageUrl = $this->getImageUrl($request);
        }
        else
        {
            $this->imageUrl = $this->blog->image;
        }
        $this->blog->category_id = $request->category_id;
        $this->blog->main_title = $request->main_title;
        $this->blog->sub_title = $request->sub_title;
        $this->blog->author_id = Auth::user()->id;
        $this->blog->short_description = $request->short_description;
        $this->blog->long_description = $request->long_description;
        $this->blog->image = $this->imageUrl;
        $this->blog->save();
        return redirect('/dashboard/manage-blog');
        $flasher->addSuccess('Successfully Updated Blog');
    }
    public function delete($id,FlasherInterface $flasher)
    {
        Blog::find($id)->delete();
        $flasher->addError('Blog Successfully Deleted');
        return redirect('/dashboard/manage-blog');
    }
    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('admin.blog.detail',['blog'=>$this->blog]);
    }
    public function updateStatus(Request $request,$id)
    {
        $this->blog = Blog::find($id);
        if($this->blog->status == 1)
        {
            $this->blog->status = 0;
            $this->message = "Blog successfully Unpublished";
        }
        else if($this->blog->status == 0)
        {
            $this->blog->status = 1;
            $this->message = "Blog successfully Published";
        }
        $this->blog->save();
        return redirect('/dashboard/manage-blog')->with('message',$this->message);
    }
}
