<?php

use App\Http\Controllers\HousesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('resolucaoProblema', function() {
    $casas = [
        10000,
        50000,
        30,
        30000,
        10,
        50,
        75000,
    ];

    usort($casas, function($a, $b){
        if($a > $b) return 1;
        return -1;
    });

    $orcamento = 72050;
    $orcamentoAtual = $orcamento;
    $casasAdquiridas = 0;

    while( count($casas) > 0 && $orcamentoAtual - $casas[0] > 0) {
        $casaAtual = $casas[0];
        if($orcamentoAtual - $casaAtual > 0) {
            $orcamentoAtual -= $casaAtual;
            $casasAdquiridas++;
        }
        array_shift($casas);
    }

    $diferencaOrcamento = $orcamento - $orcamentoAtual;
    echo (
        "\nOrcamento restante: {$orcamentoAtual}
        \nCasas adquiridas: {$casasAdquiridas}
        \nOrcamento utilizado: {$diferencaOrcamento}"
    );
});
