<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_MAE_LDAP
 *
 * @property int $p_mae_ldap
 * @property string|null $flt_ldap
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_LDAP whereFltLdap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_LDAP wherePMaeLdap($value)
 * @mixin \Eloquent
 */
class SI_MAE_LDAP extends Model
{
    protected $table = 'si_mae_ldap';
    protected $primaryKey = 'p_mae_ldap';
    protected $fillable = ['p_mae_ldap','flt_ldap'];
    public $timestamps = false;

}
