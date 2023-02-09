<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class CategoryController extends Controller
{
    public $category;
    public $categories;
    public $image;
    public $imageName;
    public $directory;
    public $imageUrl;
    public function index()
    {
        return view('admin.category.add');
    }
    public function getImageUrl($request)
    {
        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'category-images/';
        $this->image->move($this->directory,$this->imageName);
        $this->imageUrl = $this->directory.$this->imageName;
        return $this->imageUrl;
    }
    public function create(Request $request,FlasherInterface $flasher)
    {
        // return $request->all();
        $this->category = new Category();
        $this->category->name = $request->name;
        $this->category->description = $request->description;
        $this->category->image = $this->getImageUrl($request);
        $this->category->save();
        $flasher->addSuccess('successfully added category');
        return redirect()->back();
    }

    public function manage()
    {
        $this->categories = Category::orderBy('id','asc')->get();
        return view('admin.category.manage',['categories'=>$this->categories]);
    }
    public function edit($id)
    {
        $this->category = Category::findOrfail($id);
        return view('admin.category.edit',['category'=>$this->category]);
    }
    public function update(Request $request,$id,FlasherInterface $flasher)
    {
        $this->category = Category::find($id);
        if($request->file('image'))
        {
            if(file_exists($this->category->image))
            {
                unlink($this->category->image);
            }
            $this->imageUrl = $this->getImageUrl($request);
        }
        else
        {
            $this->imageUrl = $this->category->image;
        }
        $this->category->name = $request->name;
        $this->category->description = $request->description;
        $this->category->image = $this->imageUrl;
        $this->category->save();
        $flasher->addSuccess("Successfully Updated Category");
        return redirect('/dashboard/manage-category');
    }
    public function delete($id,FlasherInterface $flasher)
    {
        Category::find($id)->delete();
        $flasher->addError('Category Has Been Deteted.');
        return redirect()->back();
    }
}
