<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class ST_MAE_PERIODO extends Model
{
    protected $table = 'st_mae_periodo';
    protected $primaryKey = 'p_mae_periodo';
    protected $fillable = ['p_mae_periodo','no_periodo','ci_perido'];
    public $timestamps = false;

}
