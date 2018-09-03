<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\ST_MOV_SCAN
 *
 * @property int $p_mov_scan
 * @property float|null $sub_scan
 * @property float|null $baj_scan
 * @property string|null $tim_inicio_scan
 * @property string|null $tim_fin_scan
 * @property string|null $f_mae_area
 * @property string|null $f_mae_mkt
 * @property string|null $f_mae_proveedor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN whereBajScan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN whereFMaeArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN whereFMaeMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN whereFMaeProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN wherePMovScan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN whereSubScan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN whereTimFinScan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MOV_SCAN whereTimInicioScan($value)
 * @mixin \Eloquent
 */
class ST_MOV_SCAN extends Model
{
    protected $table = 'st_mov_scan';
    protected $primaryKey = 'p_mov_scan';
    protected $fillable = ['p_mov_scan','sub_scan','baj_scan','tim_inicio_scan','tim_fin_scan','f_mae_area','f_mae_mkt','f_mae_proveedor'];
    public $timestamps = false;

}
