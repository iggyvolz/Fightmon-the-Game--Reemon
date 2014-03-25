<?php

namespace ftgr;

class flike extends fightmon
{

// Allows Flike-specific functions to be implimented in later versions
	public $energy = FTGR_FLIKE_STARTING_ENERGY;

	public function bite($args = NULL)
	{
		if ($args === NULL)
		{
			return array(_("This function requires a parameter.  Please see the documentation."));
		}
		return $this->_move(_("Bite"), FTGR_BITE_POWER_FLIKE, FTGR_BITE_ACCURACY, $args[0]);
	}

	public function kick($args = NULL)
	{
		if ($args === NULL)
		{
			return array(_("This function requires a parameter.  Please see the documentation."));
		}
		return $this->_move(_("Kick"), FTGR_KICK_POWER, FTGR_KICK_ACCURACY, $args[0]);
	}

	public function scratch($args = NULL)
	{
		if ($args === NULL)
		{
			return array(_("This function requires a parameter.  Please see the documentation."));
		}
		return $this->_move(_("Scratch"), FTGR_SCRATCH_POWER_FLIKE, FTGR_SCRATCH_ACCURACY, $args[0]);
	}

}
