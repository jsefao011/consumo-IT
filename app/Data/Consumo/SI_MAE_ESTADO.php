<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_MAE_ESTADO
 *
 * @property int $p_mae_estado
 * @property string|null $obj_estado
 * @property string|null $val_estado
 * @property string|null $des_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ESTADO whereDesEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ESTADO whereObjEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ESTADO wherePMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ESTADO whereValEstado($value)
 * @mixin \Eloquent
 */
class SI_MAE_ESTADO extends Model
{
    protected $table = 'si_mae_estado';
    protected $primaryKey = 'p_mae_estado';
    protected $fillable = ['p_mae_estado','obj_estado','val_estado','des_estado'];
    public $timestamps = false;

}
