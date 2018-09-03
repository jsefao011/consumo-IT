<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_CAB_CONTRATO
 *
 * @property int $p_cab_contrato
 * @property string|null $fe_emision_contrato
 * @property string|null $fe_vencimiento_contrato
 * @property string|null $cod_contrato
 * @property string|null $des_contrato
 * @property string|null $f_mae_proveedor
 * @property string|null $f_mae_entidad
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO whereCodContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO whereDesContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO whereFMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO whereFMaeProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO whereFeEmisionContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO whereFeVencimientoContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_CAB_CONTRATO wherePCabContrato($value)
 */
	class SI_CAB_CONTRATO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_ACCESO
 *
 * @property int $p_mae_acceso
 * @property string|null $no_acceso
 * @property string|null $url_acceso
 * @property string|null $f_mae_acceso
 * @property string|null $ico_acceso
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ACCESO whereFMaeAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ACCESO whereIcoAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ACCESO whereNoAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ACCESO wherePMaeAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ACCESO whereUrlAcceso($value)
 */
	class SI_MAE_ACCESO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_AREA
 *
 * @property int $p_mae_area
 * @property string|null $no_area
 * @property string|null $des_area
 * @property int|null $jerarquia
 * @property string|null $f_mae_encargado
 * @property string|null $f_mae_entidad
 * @property int|null $f_mae_estado
 * @property string|null $f_mae_area
 * @property int|null $f_mae_departameto
 * @property string|null $f_mae_mkt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereDesArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeDepartameto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeEncargado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereFMaeMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereJerarquia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA whereNoArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_AREA wherePMaeArea($value)
 */
	class SI_MAE_AREA extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_ENTIDAD
 *
 * @property int $p_mae_entidad
 * @property string|null $no_entidad
 * @property string|null $ruc_entidad
 * @property int|null $f_mae_estado
 * @property string|null $f_mae_ldap
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ENTIDAD whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ENTIDAD whereFMaeLdap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ENTIDAD whereNoEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ENTIDAD wherePMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ENTIDAD whereRucEntidad($value)
 */
	class SI_MAE_ENTIDAD extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_ESTADO
 *
 * @property int $p_mae_estado
 * @property string|null $obj_estado
 * @property string|null $val_estado
 * @property string|null $des_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ESTADO whereDesEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ESTADO whereObjEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ESTADO wherePMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_ESTADO whereValEstado($value)
 */
	class SI_MAE_ESTADO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_GRUPO
 *
 * @property int $p_mae_grupo
 * @property string|null $no_grupo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_GRUPO whereNoGrupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_GRUPO wherePMaeGrupo($value)
 */
	class SI_MAE_GRUPO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_LDAP
 *
 * @property int $p_mae_ldap
 * @property string|null $flt_ldap
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_LDAP whereFltLdap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_LDAP wherePMaeLdap($value)
 */
	class SI_MAE_LDAP extends \Eloquent {}
}

namespace App\Entities\local2{
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
 */
	class SI_MAE_PERSONA extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_PRIBILEGIO
 *
 * @property int $p_mae_pribilegio
 * @property string|null $f_mae_grupo
 * @property string|null $f_mae_acceso
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PRIBILEGIO whereFMaeAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PRIBILEGIO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PRIBILEGIO whereFMaeGrupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PRIBILEGIO wherePMaePribilegio($value)
 */
	class SI_MAE_PRIBILEGIO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_MAE_PROVEEDOR
 *
 * @property int $p_mae_proveedor
 * @property string|null $no_proveedor
 * @property string|null $ruc_proveedor
 * @property string|null $dir_proveedor
 * @property string|null $tlf_proveedor
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PROVEEDOR whereDirProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PROVEEDOR whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PROVEEDOR whereNoProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PROVEEDOR wherePMaeProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PROVEEDOR whereRucProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_MAE_PROVEEDOR whereTlfProveedor($value)
 */
	class SI_MAE_PROVEEDOR extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\SI_REL_EMPLEADO
 *
 * @property string $f_mae_persona
 * @property string $f_mae_entidad
 * @property string|null $f_mae_grupo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_REL_EMPLEADO whereFMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_REL_EMPLEADO whereFMaeGrupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\SI_REL_EMPLEADO whereFMaePersona($value)
 */
	class SI_REL_EMPLEADO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\ST_DET_CONTRATO
 *
 * @property int $p_det_contrato
 * @property int|null $f_mae_activo
 * @property string|null $f_mae_area
 * @property string|null $f_cab_contrato
 * @property string|null $f_mae_periodo
 * @property string|null $f_mae_encargado
 * @property string|null $des_det_contrato
 * @property int|null $min_tlf_det_contrato
 * @property float|null $cf_tlf_det_contrato
 * @property float|null $int_gb_tlf_det_contrato
 * @property float|null $sms_tlf_det_contrato
 * @property float|null $to_ldn_tlf_det_contrato
 * @property float|null $to_ldi_tlf_det_contrato
 * @property float|null $op_oper_tlf_det_contrato
 * @property float|null $to_ad_tlf_det_contrato
 * @property float|null $to_cf_tlf_det_contrato
 * @property float|null $pg_ent_tlf_det_contrato
 * @property string|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereCfTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereDesDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereFCabContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereFMaeActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereFMaeArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereFMaeEncargado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereFMaePeriodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereIntGbTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereMinTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereOpOperTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO wherePDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO wherePgEntTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereSmsTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereToAdTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereToCfTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereToLdiTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_DET_CONTRATO whereToLdnTlfDetContrato($value)
 */
	class ST_DET_CONTRATO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\ST_HIS_CONTRATO
 *
 * @property int $p_his_contrato
 * @property int|null $f_mae_activo
 * @property string|null $f_mae_area
 * @property string|null $f_mae_periodo
 * @property string|null $f_mae_encargado
 * @property string|null $des_det_contrato
 * @property int|null $min_tlf_det_contrato
 * @property float|null $cf_tlf_det_contrato
 * @property float|null $int_gb_tlf_det_contrato
 * @property float|null $sms_tlf_det_contrato
 * @property float|null $to_ldn_tlf_det_contrato
 * @property float|null $to_ldi_tlf_det_contrato
 * @property float|null $op_oper_tlf_det_contrato
 * @property float|null $to_ad_tlf_det_contrato
 * @property float|null $to_cf_tlf_det_contrato
 * @property float|null $pg_ent_tlf_det_contrato
 * @property string|null $f_det_contrato
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereCfTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereDesDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereFDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereFMaeActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereFMaeArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereFMaeEncargado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereFMaePeriodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereIntGbTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereMinTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereOpOperTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO wherePHisContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO wherePgEntTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereSmsTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereToAdTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereToCfTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereToLdiTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_HIS_CONTRATO whereToLdnTlfDetContrato($value)
 */
	class ST_HIS_CONTRATO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\ST_MAE_ACTIVO
 *
 * @property int $p_mae_activo
 * @property string|null $des_activo
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ACTIVO whereDesActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ACTIVO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ACTIVO wherePMaeActivo($value)
 */
	class ST_MAE_ACTIVO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\ST_MAE_DEPARTAMENTO
 *
 * @property int $p_mae_departameto
 * @property string|null $nv_asinet_departamento
 * @property string|null $nv_zw_departamento
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_DEPARTAMENTO whereNvAsinetDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_DEPARTAMENTO whereNvZwDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_DEPARTAMENTO wherePMaeDepartameto($value)
 */
	class ST_MAE_DEPARTAMENTO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\ST_MAE_ENCARGADO
 *
 * @property int $p_mae_encargado
 * @property string|null $crg_encargado
 * @property int|null $f_mae_estado
 * @property string|null $f_mae_persona
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO whereCrgEncargado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO whereFMaePersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_ENCARGADO wherePMaeEncargado($value)
 */
	class ST_MAE_ENCARGADO extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\ST_MAE_MKT
 *
 * @property int $p_mae_mkt
 * @property string|null $no_mkt
 * @property string|null $ip
 * @property string|null $us_mkt
 * @property string|null $psw_mkt
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereNoMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT wherePMaeMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT wherePswMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereUsMkt($value)
 */
	class ST_MAE_MKT extends \Eloquent {}
}

namespace App\Entities\local2{
/**
 * App\Entities\local2\ST_MAE_PERIODO
 *
 * @property int $p_mae_periodo
 * @property string|null $no_periodo
 * @property int|null $ci_perido
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_PERIODO whereCiPerido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_PERIODO whereNoPeriodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_PERIODO wherePMaePeriodo($value)
 */
	class ST_MAE_PERIODO extends \Eloquent {}
}

namespace App\Entities\local2{
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
 */
	class ST_MOV_SCAN extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class User extends \Eloquent {}
}

