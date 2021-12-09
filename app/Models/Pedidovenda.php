<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedidovenda
 * 
 * @property int $pv_numero
 * @property int $pv_empresa
 * @property Carbon|null $pv_dtentrada
 * @property int $pv_cliente
 * @property string|null $pv_observacao
 * @property float $pv_desconto_produto
 * @property float $pv_desconto_servico
 * @property float $pv_total_produto
 * @property float $pv_total_servico
 * @property float $pv_total_pedido
 * @property int|null $pv_condicaopagamento
 * @property Carbon|null $pv_dtfaturamento
 * @property string|null $pv_status
 * @property Carbon|null $pv_dtaprovado
 * @property Carbon|null $pv_dtfechado
 * @property string|null $pv_aprovadopor
 * @property float|null $pv_totalcustomedio
 * @property float $pv_totalcusto_produto
 * @property string|null $pv_liberado
 * @property int $pv_vendedor
 * @property string|null $pv_usuario
 * @property float|null $pv_comissaoservico
 * @property Carbon|null $pv_dtentrega
 * @property float|null $pv_frete
 * @property float|null $pv_total_bruto
 * @property string|null $pv_formaspagamento
 * @property string|null $pv_enderecocliente
 * @property string|null $pv_assinaturatec
 * @property string|null $pv_assinaturaemp
 *
 * @package App\Models
 */
#example model table
class Pedidovenda extends Model
{
	protected $table = 'PEDIDOVENDA';
	protected $primaryKey = 'PV_NUMERO';
	public $timestamps = false;

	protected $casts = [
		'PV_EMPRESA' => 'int',
		'PV_CLIENTE' => 'int',
		'PV_DESCONTO_PRODUTO' => 'float',
		'PV_DESCONTO_SERVICO' => 'float',
		'PV_TOTAL_PRODUTO' => 'float',
		'PV_TOTAL_SERVICO' => 'float',
		'PV_TOTAL_SERVICO' => 'float',
		'PV_CONDICAOPAGAMENTO' => 'int',
		'PV_VENDEDOR' => 'int',
		'PV_COMISSAOSERVICO' => 'float',
		'PV_FRETE' => 'float',
		'PV_TOTAL_BRUTO' => 'float',
		'PV_RETIRADA' => 'int',
	];

	protected $dates = [
		"PV_DTENTRADA",
		"PV_DTFATURAMENTO",
		"PV_DTAPROVADO",
		"PV_DTFECHADO",
		"PV_DTENTREGA",
	];

	protected $fillable = [
		"PV_EMPRESA",
		"PV_DTENTRADA",
		"PV_CLIENTE",
		"PV_OBSERVACAO",
		"PV_DESCONTO_PRODUTO",
		"PV_DESCONTO_SERVICO",
		"PV_TOTAL_PRODUTO",
		"PV_TOTAL_SERVICO",
		"PV_TOTAL_PEDIDO",
		"PV_CONDICAOPAGAMENTO",
		"PV_DTFATURAMENTO",
		"PV_STATUS",
		"PV_DTAPROVADO",
		"PV_DTFECHADO",
		"PV_APROVADOPOR",
		"PV_LIBERADO",
		"PV_DTENTREGA",
		"PV_FRETE",
		"PV_CODIGORASTREIO",
		"PV_TOTAL_BRUTO",
		"PV_FORMASPAGAMENTO",
		"PV_ENDERECOCLIENTE",
		"PV_ASSINATURATEC",
		"PV_ASSINATURAEMP",
		"PV_RETIRADA",
		"PV_PATH_COMP",
	];
}
