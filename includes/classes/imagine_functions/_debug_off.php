<?php

namespace iMagine_functions;

trait _debug_off
{
	public function _debug_off($args = NULL)
	{
		$_SESSION['iMagine']['debug'] = FALSE;
		return array(\iMagine\_('Debug mode is now off.'));
	}
}