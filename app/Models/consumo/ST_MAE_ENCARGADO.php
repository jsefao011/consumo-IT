<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class ST_MAE_ENCARGADO extends Model
{
    protected $table = 'st_mae_encargado';
    protected $primaryKey = 'p_mae_encargado';
    protected $fillable = ['p_mae_encargado','crg_encargado','f_mae_estado','f_mae_persona'];
    public $timestamps = false;

}
