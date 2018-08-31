<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_ENTIDAD extends Model
{
    protected $table = 'si_mae_entidad';
    protected $primaryKey = 'p_mae_entidad';
    protected $fillable = ['p_mae_entidad','no_entidad','ruc_entidad','f_mae_estado','f_mae_ldap'];
    public $timestamps = false;

}
