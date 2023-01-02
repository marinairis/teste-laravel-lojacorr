<?php

namespace App\Http\Controllers;

use App\Models\Categories as Categories;
use App\Http\Resources\Categories as CategoriesResource;
use App\Http\Requests\StoreCategoriesRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::get();

        if($categories->isEmpty()){
            return response()->json([
                "message" => "Nenhuma categoria cadastrada."
            ], 200);
        }

        return new CategoriesResource($categories->toJson(JSON_PRETTY_PRINT));
    }

    public function show($id)
    {
        $categories = Categories::where('id', $id);

        if(! $categories->exists()){
            return response()->json([
                "message" => "Categoria não encontrada."
            ], 404);
        }

        return new CategoriesResource($categories->find($id));
    }

    public function store(StoreCategoriesRequest $request)
    {
        $categorie = new Categories;
        $categorie->name = $request->name;
        $categorie->save();

        return response()->json([
            "success" => "Categoria criada com sucesso.",
            "data" => new CategoriesResource($categorie),
        ]);
    }


    public function update(StoreCategoriesRequest $request, $id)
    {
        $categorie = Categories::findOrFail($request->id);
        $categorie->name = $request->name;
        $categorie->save();

        return response()->json([
            "success" => "Categoria atualizada com sucesso..",
            "data" => new CategoriesResource($categorie),
        ]);
    }

    public function delete($id)
    {
        $categorie = Categories::findOrFail($id);
        $categorie->delete();

        return response()->json([
            "deleted" => "Categoria deleteda com sucesso.",
            "data" => new CategoriesResource($categorie),
        ]);
    }
}
