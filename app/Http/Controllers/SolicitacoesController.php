<?php

namespace App\Http\Controllers;

use App\Models\Solicitacoes;
use Illuminate\Http\Request;

class SolicitacoesController extends Controller
{
    public function index(){
        return Solicitacoes::orderBy('id_solicitacao')->get();
    }

    public function store(Request $request){
        $valor = $request->input();

        $solicitacao = new Solicitacoes;

        $solicitacao->statuss = $valor['statuss'];
        $solicitacao->id_servico = $valor['id_servico'];
        $solicitacao->id_funcionario = $valor['id_funcionario'];
        $solicitacao->id_veiculo = $valor['id_veiculo'];
        $solicitacao->id_cliente = $valor['id_cliente'];

        try {
            $solicitacao->save();
        } catch (\Exception $e) {
            return [
                "status" => "ERROR",
                "message" => $e->getMessage()
            ];
        }

        return $valor;
    }

    public function show(int $id){
        $result = Solicitacoes::find($id);

        if($result) return $result;

        return [];
    }

    public function update(Request $request, int $id){
        $valor = $request->input();

        $solicitacao = Solicitacoes::find($id);

        foreach ($valor as $chave => $v) {
            if ($chave === "statuss") {
                $solicitacao->statuss = $v;
            }
            if ($chave === "id_servico") {
                $solicitacao->id_servico = $v;
            }
            if ($chave === "id_funcionario") {
                $solicitacao->id_funcionario = $v;
            }
            if ($chave === "id_veiculo") {
                $solicitacao->id_veiculo = $v;
            }
            if ($chave === "id_cliente") {
                $solicitacao->id_cliente = $v;
            }
        }

        try {
            $solicitacao->save();
            return $valor;
        } catch (\Exception $e) {
            return [
                "status" => "ERROR",
                "message" => $e->getMessage()
            ];
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id){
        $result = Solicitacoes::destroy($id);

        return $result;
    }
}
