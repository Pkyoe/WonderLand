<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::paginate(5);
        return view('Admin.category.list',compact('categories'));
    }

    public function createPage(){
        return view('Admin.category.create');
    }

    public function create(Request $request)
    {
       $this->categoryDataValidation($request);
        $data = $this->requestCategoryData($request);
        Category::create($data);

        return redirect()->route('category#list')->with(['categorySuccess'=>'Category Created Successful']);
    }

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
       return view('Admin.category.edit',compact('category'));
    }

    public function update(Request $request)
    {
        $this->categoryDataValidation($request);
        $data = $this->requestCategoryData($request);
        Category::where('id',$request->categoryId)->update($data);
        return redirect()->route('category#list')->with(['categoryUpdateSuccess'=>'Category Updated Successful']);
    }

    public function delete($id){
        Category::where('id',$id)->delete();
        return redirect()->route('category#list')->with(['categoryDeleteSuccess'=>'Category Deleted Successful']);
    }

    private function requestCategoryData($request){
        return [
            'name' => $request->categoryName
        ];
    }

    private function categoryDataValidation($request){
        Validator::make($request->all(),['categoryName' => 'required|unique:categories,name'])->validate();
    }

}
