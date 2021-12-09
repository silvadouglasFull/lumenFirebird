<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidovendaProduto
 * 
 * @property int $pvp_pedidovenda
 * @property int $pvp_empresa
 * @property int $pvp_produto
 * @property float $pvp_qtde
 * @property float $pvp_desconto
 * @property float $pvp_valorunit
 * @property float $pvp_valortotal
 * @property int|null $pvp_item
 * @property float|null $pvp_ipi
 * @property float|null $pvp_valorbruto
 * @property Carbon|null $pvp_dtentrega
 * @property string|null $pvp_descricao
 * @property string|null $pvp_marca
 * @property float|null $pvp_qtdeentregue
 *
 * @package App\Models
 */
class PedidovendaProduto extends Model
{
	protected $table = 'pedidovenda_produto';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pvp_pedidovenda' => 'int',
		'pvp_empresa' => 'int',
		'pvp_produto' => 'int',
		'pvp_qtde' => 'float',
		'pvp_desconto' => 'float',
		'pvp_valorunit' => 'float',
		'pvp_valortotal' => 'float',
		'pvp_item' => 'int',
		'pvp_qtdeentregue' => 'float',
	];

	protected $dates = [
		'pvp_dtentrega'
	];

	protected $fillable = [
		'pvp_pedidovenda',
		'pvp_empresa',
		'pvp_produto',
		'pvp_qtde',
		'pvp_desconto',
		'pvp_valorunit',
		'pvp_valortotal',
		'pvp_item',
		'pvp_dtentrega',
		'pvp_descricao',
		'pvp_qtdeentregue',
		'pvp_observacao',
	];
}
