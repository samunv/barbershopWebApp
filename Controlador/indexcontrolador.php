<?php
require_once "../Modelo/UsuariosDao.php";
$sesion= $_GET["sesion"];
$daoUs = new UsuariosDao();
$resultado = $daoUs->leerUsuarioPorNombre($sesion);
echo json_encode($resultado[0]);