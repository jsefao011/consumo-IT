<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_LDAP extends Model
{
    protected $table = 'si_mae_ldap';
    protected $primaryKey = 'p_mae_ldap';
    protected $fillable = ['p_mae_ldap','flt_ldap'];
    public $timestamps = false;

}
