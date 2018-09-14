<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_MAE_PROVEEDOR
 *
 * @property int $p_mae_proveedor
 * @property string|null $no_proveedor
 * @property string|null $ruc_proveedor
 * @property string|null $dir_proveedor
 * @property string|null $tlf_proveedor
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PROVEEDOR whereDirProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PROVEEDOR whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PROVEEDOR whereNoProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PROVEEDOR wherePMaeProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PROVEEDOR whereRucProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PROVEEDOR whereTlfProveedor($value)
 * @mixin \Eloquent
 */
class SI_MAE_PROVEEDOR extends Model
{
    protected $table = 'si_mae_proveedor';
    protected $primaryKey = 'p_mae_proveedor';
    protected $fillable = ['p_mae_proveedor','no_proveedor','ruc_proveedor','dir_proveedor','tlf_proveedor','f_mae_estado'];
    public $timestamps = false;

}
