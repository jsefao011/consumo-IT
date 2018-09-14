<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_MAE_ENTIDAD
 *
 * @property int $p_mae_entidad
 * @property string|null $no_entidad
 * @property string|null $ruc_entidad
 * @property int|null $f_mae_estado
 * @property int|null $f_mae_ldap
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ENTIDAD whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ENTIDAD whereFMaeLdap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ENTIDAD whereNoEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ENTIDAD wherePMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ENTIDAD whereRucEntidad($value)
 * @mixin \Eloquent
 */
class SI_MAE_ENTIDAD extends Model
{
    protected $table = 'si_mae_entidad';
    protected $primaryKey = 'p_mae_entidad';
    protected $fillable = ['p_mae_entidad','no_entidad','ruc_entidad','f_mae_estado','f_mae_ldap'];
    public $timestamps = false;

}
