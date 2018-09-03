<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\SI_REL_EMPLEADO
 *
 * @property string $f_mae_persona
 * @property string $f_mae_entidad
 * @property string|null $f_mae_grupo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_REL_EMPLEADO whereFMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_REL_EMPLEADO whereFMaeGrupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_REL_EMPLEADO whereFMaePersona($value)
 * @mixin \Eloquent
 */
class SI_REL_EMPLEADO extends Model
{
    protected $table = 'si_rel_empleado';
    protected $primaryKey = '';
    protected $fillable = ['f_mae_persona','f_mae_entidad','f_mae_grupo'];
    public $timestamps = false;

}
