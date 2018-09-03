<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\ST_MAE_ACTIVO
 *
 * @property int $p_mae_activo
 * @property string|null $des_activo
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ACTIVO whereDesActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ACTIVO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ACTIVO wherePMaeActivo($value)
 * @mixin \Eloquent
 */
class ST_MAE_ACTIVO extends Model
{
    protected $table = 'st_mae_activo';
    protected $primaryKey = 'p_mae_activo';
    protected $fillable = ['p_mae_activo','des_activo','f_mae_estado'];
    public $timestamps = false;

}
