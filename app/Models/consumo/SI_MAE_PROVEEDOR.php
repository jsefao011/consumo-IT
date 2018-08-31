<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_PROVEEDOR extends Model
{
    protected $table = 'si_mae_proveedor';
    protected $primaryKey = 'p_mae_proveedor';
    protected $fillable = ['p_mae_proveedor','no_proveedor','ruc_proveedor','dir_proveedor','tlf_proveedor','f_mae_estado'];
    public $timestamps = false;

}
