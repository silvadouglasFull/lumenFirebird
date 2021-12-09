<?php

namespace App\Http\Controllers;

// use App\Models\Pedidovenda;
use App\Models\PedidovendaProduto;
use Illuminate\Http\Request;

class PedidoVendaProdutoController extends Controller
{
    //mb_convert_case($str, pvp_numero, 'UTF-8');
    public function index($pvp_empresa, $pvp_pedidovenda)
    {
        try {
            $result = PedidovendaProduto::where([
                ['pvp_pedidovenda', $pvp_pedidovenda],
                ['pvp_empresa', $pvp_empresa]
            ])
                ->join('produto', 'produto.PROD_CODIGO', 'pedidovenda_produto.pvp_produto')
                ->join('galeria', 'galeria.gal_id', 'produto.prod_foto')
                ->select('pedidovenda_produto.*', 'galeria.gal_path')
                ->orderBy('produto.PROD_DESCRICAO', 'ASC')
                ->get();
            return response()->json($result, 200);
        } catch (\Throwable $th) {
            return response()->json(['msg' => 'Erro na listagem'], 200);
        }
    }
}
