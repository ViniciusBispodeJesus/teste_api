<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcasController;

Route::apiResource('/marcas', MarcasController::class);
Route::apiResource('/modelos', ModelosController::class);
Route::apiResource('/clientes', ClientesController::class); //vt
Route::apiResource('/funcionarios', FuncionariosController::class); //vt
Route::apiResource('/veiculos', VeiculosController::class);
Route::apiResource('/servicos', ServicosController::class);
Route::apiResource('/solicitacoes', SolicitacoesController::class);
Route::apiResource('/compras', ComprasController::class);
Route::apiResource('/vendas', VendasController::class);
Route::apiResource('/pagamentos', PagamentosController::class);
Route::apiResource('/fornecedores', FornecedoresController::class);
Route::apiResource('/usuarios', UsuariosController::class); //vt
