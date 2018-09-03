<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\SI_MAE_GRUPO
 *
 * @property int $p_mae_grupo
 * @property string|null $no_grupo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_GRUPO whereNoGrupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_GRUPO wherePMaeGrupo($value)
 * @mixin \Eloquent
 */
class SI_MAE_GRUPO extends Model
{
    protected $table = 'si_mae_grupo';
    protected $primaryKey = 'p_mae_grupo';
    protected $fillable = ['p_mae_grupo','no_grupo'];
    public $timestamps = false;

}
