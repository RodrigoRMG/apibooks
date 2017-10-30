<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categories=Category::all();
    	return response()->json($categories,200);
    }


    public function show($id)
    {
        $category=Category::find($id);
        if($category)
        {
            return response()->json($category,200);
        }else{
            return response()->json(['error'=>'Not found'],404);
        }
        
    }
    
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        return response()->json($category,200);
    }


    public function update(CategoryRequest $request, $id)
    {
    	$category=Category::find($id);
        $category->update($request->all());
        return response()->json($category,200);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json('ok',200);
    }
}
