<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\SI_MAE_PERSONA
 *
 * @property int $p_mae_persona
 * @property string|null $no_persona
 * @property string|null $ap_persona
 * @property string|null $dni_persona
 * @property string|null $tlf_persona
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PERSONA whereApPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PERSONA whereDniPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PERSONA whereNoPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PERSONA wherePMaePersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PERSONA whereTlfPersona($value)
 * @mixin \Eloquent
 */
class SI_MAE_PERSONA extends Model
{
    protected $table = 'si_mae_persona';
    protected $primaryKey = 'p_mae_persona';
    protected $fillable = ['p_mae_persona','no_persona','ap_persona','dni_persona','tlf_persona'];
    public $timestamps = false;

}
