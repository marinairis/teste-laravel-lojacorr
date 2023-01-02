<?php

namespace App\Http\Controllers;

use App\Http\Requests\HousesRequest;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    public function index()
    {
        return view('houses');
    }

    public function result(HousesRequest $request)
    {
        $values = $request->all();

        $this->calculatePurchase($values);
    }

    public function calculatePurchase(array $values)
    {
        $valueHouses = $values['house_1'] + $values['house_2'] + $values['house_3'];

        $budget = $values['orcamento'];

        $balance = $budget - $valueHouses;

        return view('result', [$values, $valueHouses, $balance]);
    }
}
