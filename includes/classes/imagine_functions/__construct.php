<?php

namespace iMagine_functions;

trait __construct
{
	public function __construct()
	{
		if (isset($_SESSION['iMagine'][explode('\\', get_class($this))[1] . 'energy']))
		{
			$this->energy = $_SESSION['iMagine'][explode('\\', get_class($this))[1] . 'energy'];
		}
		$_SESSION['iMagine'][explode('\\', get_class($this))[1] . 'energy'];
	}
}