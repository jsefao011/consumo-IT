<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\SI_MAE_AREA
 *
 * @property int $p_mae_area
 * @property string|null $no_area
 * @property string|null $des_area
 * @property int|null $jerarquia
 * @property string|null $f_mae_encargado
 * @property string|null $f_mae_entidad
 * @property int|null $f_mae_estado
 * @property string|null $f_mae_area
 * @property int|null $f_mae_departameto
 * @property string|null $f_mae_mkt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereDesArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeDepartameto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeEncargado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereJerarquia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereNoArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA wherePMaeArea($value)
 * @mixin \Eloquent
 */
class SI_MAE_AREA extends Model
{
    protected $table = 'si_mae_area';
    protected $primaryKey = 'p_mae_area';
    protected $fillable = ['p_mae_area','no_area','des_area','jerarquia','f_mae_encargado','f_mae_entidad','f_mae_estado','f_mae_area','f_mae_departameto','f_mae_mkt'];
    public $timestamps = false;

}
