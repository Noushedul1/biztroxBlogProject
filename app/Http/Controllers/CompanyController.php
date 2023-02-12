<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public $company;
    public $image;
    public $imageName;
    public $directory;
    public $imageUrl;
    public function index()
    {
        return view('admin.company.companySetting');
    }
    public function getImageUrl($request)
    {
        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = "compSetting/";
        $this->image->move($this->directory,$this->imageName);
        $this->imageUrl = $this->directory.$this->imageName;
        return $this->imageUrl;
    }
    public function changeFrontend(Request $request)
    {
        // return $request->all();
        $this->company = new Company();
        $this->company->image = $this->getImageUrl($request);
        $this->company->email = $request->email;
        $this->company->number = $request->number;
        $this->company->footerDescription = $request->footerDescription;
        $this->company->save();
        return redirect()->back()->with('message','Successfully Change front end setting');
    }

    public function manage()
    {
        $this->company = Company::first();
        return view('admin.company.manage',['company'=>$this->company]);
    }
    public function delete($id)
    {
         Company::findOrfail($id)->delete();
        return redirect()->back()->with('message','Filled the field again please');
    }
}
