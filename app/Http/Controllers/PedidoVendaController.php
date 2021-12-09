<?php

namespace App\Http\Controllers;

use App\Models\Pedidovenda;
use Illuminate\Http\Request;

class PedidoVendaController extends Controller
{
    public function index()
    {
        try {
            $result = Pedidovenda::where('PV_STATUS', 'A')->select('PEDIDOVENDA.PV_CLIENTE')->paginate(2);
            return response()->json($result, 200);
        } catch (\Throwable $th) {
            return response()->json(['mesage' => 'Erro na listagem', $th], 500);
        }
    }
}
