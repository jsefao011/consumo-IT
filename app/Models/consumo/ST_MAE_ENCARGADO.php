<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\ST_MAE_ENCARGADO
 *
 * @property int $p_mae_encargado
 * @property string|null $crg_encargado
 * @property int|null $f_mae_estado
 * @property string|null $f_mae_persona
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO whereCrgEncargado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO whereFMaePersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO wherePMaeEncargado($value)
 * @mixin \Eloquent
 */
class ST_MAE_ENCARGADO extends Model
{
    protected $table = 'st_mae_encargado';
    protected $primaryKey = 'p_mae_encargado';
    protected $fillable = ['p_mae_encargado','crg_encargado','f_mae_estado','f_mae_persona'];
    public $timestamps = false;

}
