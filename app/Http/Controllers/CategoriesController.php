<?php

namespace App\Http\Controllers;

use App\Models\Categories as Categories;
use App\Http\Resources\Categories as CategoriesResource;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        // $categories = Categories::paginate(10);
        $categories = Categories::get()->toJson(JSON_PRETTY_PRINT);

        return response($categories, 200);
        // return CategoriesResource::collection($categories);
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        $categories = Categories::findOrFail($id);

        return new CategoriesResource($categories);
    }

    public function store(Request $request)
    {
        $categorie = new Categories;
        $categorie->name = $request->name;
        $categorie->save();

        return response()->json([
            "success" => "Categorie created",
            "data" => new CategoriesResource($categorie),
        ]);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $categorie = Categories::findOrFail($request->id);
        $categorie->name = $request->input('name');

        if ($categorie->save()){
            return new CategoriesResource($categorie);
        }
    }

    public function destroy($id)
    {
        $categorie = Categories::findOrFail($id);

        if ($categorie->delete()) {
            return new CategoriesResource($categorie);
        }
    }
}
