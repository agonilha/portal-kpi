<?php

include_once('banco.php');

class Usuario
{

	private $idUsuario;
	private $usuario;
	private $senha;
	private $id_cliente;
	private $id_perfil;

	function __construct()
	{
	}

	/**
	 * @return mixed
	 */
	public function getIdUsuario()
	{
		return $this->idUsuario;
	}

	/**
	 * @return mixed
	 */
	public function getUsuario()
	{
		return $this->usuario;
	}

	/**
	 * @return mixed
	 */
	public function getSenha()
	{
		return $this->senha;
	}

	/**
	 * @return mixed
	 */
	public function getIdCliente()
	{
		return $this->id_cliente;
	}

	/**
	 * @return mixed
	 */
	public function getIdPerfil()
	{
		return $this->id_perfil;
	}

	/**
	 * @param mixed $id_cliente
	 */
	public function setIdCliente($id_cliente)
	{
		$this->id_cliente = $id_cliente;
	}

	/**
	 * @param mixed $id_perfil
	 */
	public function setIdPerfil($id_perfil)
	{
		$this->id_perfil = $id_perfil;
	}

	/**
	 * @param mixed $idUsuario
	 */
	public function setIdUsuario($idUsuario)
	{
		$this->idUsuario = $idUsuario;
	}

	/**
	 * @param mixed $senha
	 */
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	/**
	 * @param mixed $usuario
	 */
	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}

	/*
	 * Criação de usuário
	 */
	function criar()
	{

	}
}