<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_ESTADO extends Model
{
    protected $table = 'si_mae_estado';
    protected $primaryKey = 'p_mae_estado';
    protected $fillable = ['p_mae_estado','obj_estado','val_estado','des_estado'];
    public $timestamps = false;

}
