-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2018 a las 15:50:12
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consumo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_cab_contrato`
--

CREATE TABLE `si_cab_contrato` (
  `p_cab_contrato` varchar(50) NOT NULL,
  `fe_emision_contrato` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `fe_vencimiento_contrato` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `cod_contrato` varchar(25) DEFAULT NULL,
  `des_contrato` varchar(25) DEFAULT NULL,
  `f_mae_proveedor` varchar(50) DEFAULT NULL,
  `f_mae_entidad` varchar(50) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_acceso`
--

CREATE TABLE `si_mae_acceso` (
  `p_mae_acceso` varchar(50) NOT NULL,
  `no_acceso` varchar(25) DEFAULT NULL,
  `url_acceso` varchar(255) DEFAULT NULL,
  `f_mae_acceso` varchar(50) DEFAULT NULL,
  `ico_acceso` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_area`
--

CREATE TABLE `si_mae_area` (
  `p_mae_area` varchar(25) NOT NULL,
  `no_area` varchar(50) DEFAULT NULL,
  `des_area` varchar(50) DEFAULT NULL,
  `jerarquia` int(1) DEFAULT NULL,
  `f_mae_encargado` varchar(50) DEFAULT NULL,
  `f_mae_entidad` varchar(50) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL,
  `f_mae_area` varchar(50) DEFAULT NULL,
  `f_mae_departameto` int(11) DEFAULT NULL,
  `f_mae_mkt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_entidad`
--

CREATE TABLE `si_mae_entidad` (
  `p_mae_entidad` varchar(50) NOT NULL,
  `no_entidad` varchar(50) DEFAULT NULL,
  `ruc_entidad` varchar(25) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL,
  `f_mae_ldap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_estado`
--

CREATE TABLE `si_mae_estado` (
  `p_mae_estado` int(11) NOT NULL,
  `obj_estado` varchar(25) DEFAULT NULL,
  `val_estado` varchar(25) DEFAULT NULL,
  `des_estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_grupo`
--

CREATE TABLE `si_mae_grupo` (
  `p_mae_grupo` varchar(50) NOT NULL,
  `no_grupo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_ldap`
--

CREATE TABLE `si_mae_ldap` (
  `p_mae_ldap` varchar(50) NOT NULL,
  `flt_ldap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_persona`
--

CREATE TABLE `si_mae_persona` (
  `p_mae_persona` varchar(50) NOT NULL,
  `no_persona` varchar(25) DEFAULT NULL,
  `ap_persona` varchar(50) DEFAULT NULL,
  `dni_persona` varchar(9) DEFAULT NULL,
  `tlf_persona` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_pribilegio`
--

CREATE TABLE `si_mae_pribilegio` (
  `p_mae_pribilegio` varchar(50) NOT NULL,
  `f_mae_grupo` varchar(50) DEFAULT NULL,
  `f_mae_acceso` varchar(50) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_mae_proveedor`
--

CREATE TABLE `si_mae_proveedor` (
  `p_mae_proveedor` varchar(50) NOT NULL,
  `no_proveedor` varchar(25) DEFAULT NULL,
  `ruc_proveedor` varchar(25) DEFAULT NULL,
  `dir_proveedor` varchar(25) DEFAULT NULL,
  `tlf_proveedor` varchar(25) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_rel_empleado`
--

CREATE TABLE `si_rel_empleado` (
  `f_mae_persona` varchar(50) NOT NULL,
  `f_mae_entidad` varchar(50) NOT NULL,
  `f_mae_grupo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_det_contrato`
--

CREATE TABLE `st_det_contrato` (
  `p_det_contrato` varchar(50) NOT NULL,
  `f_mae_activo` int(11) DEFAULT NULL,
  `f_mae_area` varchar(50) DEFAULT NULL,
  `f_cab_contrato` varchar(50) DEFAULT NULL,
  `f_mae_periodo` varchar(50) DEFAULT NULL,
  `f_mae_encargado` varchar(50) DEFAULT NULL,
  `des_det_contrato` varchar(250) DEFAULT NULL,
  `min_tlf_det_contrato` int(11) DEFAULT NULL,
  `cf_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `int_gb_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `sms_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_ldn_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_ldi_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `op_oper_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_ad_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_cf_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `pg_ent_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `f_mae_estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_his_contrato`
--

CREATE TABLE `st_his_contrato` (
  `p_his_contrato` varchar(50) NOT NULL,
  `f_mae_activo` int(11) DEFAULT NULL,
  `f_mae_area` varchar(50) DEFAULT NULL,
  `f_mae_periodo` varchar(50) DEFAULT NULL,
  `f_mae_encargado` varchar(50) DEFAULT NULL,
  `des_det_contrato` varchar(250) DEFAULT NULL,
  `min_tlf_det_contrato` int(11) DEFAULT NULL,
  `cf_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `int_gb_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `sms_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_ldn_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_ldi_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `op_oper_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_ad_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `to_cf_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `pg_ent_tlf_det_contrato` decimal(12,2) DEFAULT NULL,
  `f_det_contrato` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_mae_activo`
--

CREATE TABLE `st_mae_activo` (
  `p_mae_activo` varchar(50) NOT NULL,
  `des_activo` varchar(50) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_mae_departamento`
--

CREATE TABLE `st_mae_departamento` (
  `p_mae_departameto` int(11) NOT NULL,
  `nv_asinet_departamento` varchar(25) DEFAULT NULL,
  `nv_zw_departamento` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_mae_encargado`
--

CREATE TABLE `st_mae_encargado` (
  `p_mae_encargado` varchar(50) NOT NULL,
  `crg_encargado` varchar(25) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL,
  `f_mae_persona` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_mae_mkt`
--

CREATE TABLE `st_mae_mkt` (
  `p_mae_mkt` varchar(50) NOT NULL,
  `no_mkt` varchar(25) DEFAULT NULL,
  `ip` varchar(25) DEFAULT NULL,
  `us_mkt` varchar(25) DEFAULT NULL,
  `psw_mkt` varchar(25) DEFAULT NULL,
  `f_mae_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_mae_periodo`
--

CREATE TABLE `st_mae_periodo` (
  `p_mae_periodo` int(11) NOT NULL,
  `no_periodo` varchar(25) DEFAULT NULL,
  `ci_perido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_mov_scan`
--

CREATE TABLE `st_mov_scan` (
  `p_mov_scan` varchar(50) NOT NULL,
  `sub_scan` decimal(4,2) DEFAULT NULL,
  `baj_scan` decimal(4,2) DEFAULT NULL,
  `tim_inicio_scan` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tim_fin_scan` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `f_mae_area` varchar(50) DEFAULT NULL,
  `f_mae_mkt` varchar(50) DEFAULT NULL,
  `f_mae_proveedor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `si_cab_contrato`
--
ALTER TABLE `si_cab_contrato`
  ADD PRIMARY KEY (`p_cab_contrato`);

--
-- Indices de la tabla `si_mae_acceso`
--
ALTER TABLE `si_mae_acceso`
  ADD PRIMARY KEY (`p_mae_acceso`);

--
-- Indices de la tabla `si_mae_area`
--
ALTER TABLE `si_mae_area`
  ADD PRIMARY KEY (`p_mae_area`);

--
-- Indices de la tabla `si_mae_entidad`
--
ALTER TABLE `si_mae_entidad`
  ADD PRIMARY KEY (`p_mae_entidad`);

--
-- Indices de la tabla `si_mae_estado`
--
ALTER TABLE `si_mae_estado`
  ADD PRIMARY KEY (`p_mae_estado`);

--
-- Indices de la tabla `si_mae_grupo`
--
ALTER TABLE `si_mae_grupo`
  ADD PRIMARY KEY (`p_mae_grupo`);

--
-- Indices de la tabla `si_mae_ldap`
--
ALTER TABLE `si_mae_ldap`
  ADD PRIMARY KEY (`p_mae_ldap`);

--
-- Indices de la tabla `si_mae_persona`
--
ALTER TABLE `si_mae_persona`
  ADD PRIMARY KEY (`p_mae_persona`);

--
-- Indices de la tabla `si_mae_pribilegio`
--
ALTER TABLE `si_mae_pribilegio`
  ADD PRIMARY KEY (`p_mae_pribilegio`);

--
-- Indices de la tabla `si_mae_proveedor`
--
ALTER TABLE `si_mae_proveedor`
  ADD PRIMARY KEY (`p_mae_proveedor`);

--
-- Indices de la tabla `si_rel_empleado`
--
ALTER TABLE `si_rel_empleado`
  ADD PRIMARY KEY (`f_mae_persona`,`f_mae_entidad`);

--
-- Indices de la tabla `st_det_contrato`
--
ALTER TABLE `st_det_contrato`
  ADD PRIMARY KEY (`p_det_contrato`);

--
-- Indices de la tabla `st_his_contrato`
--
ALTER TABLE `st_his_contrato`
  ADD PRIMARY KEY (`p_his_contrato`);

--
-- Indices de la tabla `st_mae_activo`
--
ALTER TABLE `st_mae_activo`
  ADD PRIMARY KEY (`p_mae_activo`);

--
-- Indices de la tabla `st_mae_departamento`
--
ALTER TABLE `st_mae_departamento`
  ADD PRIMARY KEY (`p_mae_departameto`);

--
-- Indices de la tabla `st_mae_encargado`
--
ALTER TABLE `st_mae_encargado`
  ADD PRIMARY KEY (`p_mae_encargado`);

--
-- Indices de la tabla `st_mae_mkt`
--
ALTER TABLE `st_mae_mkt`
  ADD PRIMARY KEY (`p_mae_mkt`);

--
-- Indices de la tabla `st_mae_periodo`
--
ALTER TABLE `st_mae_periodo`
  ADD PRIMARY KEY (`p_mae_periodo`);

--
-- Indices de la tabla `st_mov_scan`
--
ALTER TABLE `st_mov_scan`
  ADD PRIMARY KEY (`p_mov_scan`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `si_mae_persona`
--
ALTER TABLE `si_mae_persona`
  ADD CONSTRAINT `fk_si_mae_persona_si_rel_empleado_1` FOREIGN KEY (`p_mae_persona`) REFERENCES `si_rel_empleado` (`f_mae_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
