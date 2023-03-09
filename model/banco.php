<?php

/*
 * Banco do portal
 * Usuário root:
 * root
 * O4Fn2HZeh2n-xIYf
 */

class Conexao
{
	function executaSQL($sql)
	{
		$dsn = 'mysql:dbname=portal;host=localhost';

		$user = 'root';
		$pass = 'O4Fn2HZeh2n-xIYf';

		try {
			$con = new PDO($dns, $user, $pass);
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $con->query($sql);
		}
		catch(PDOException $e)
		{
			echo $e;
			die();
		}
	}
}

/*
 * DDL
 * create database portal-kpi
 *
 * create table usuario (
 *
 */