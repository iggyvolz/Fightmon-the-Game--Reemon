<?php

namespace ftgr_functions;

trait mock_battle
{
	public function mock_battle($args = NULL)
	{
		global $battle, $avaliable_battles;
		if (isset($args[0]) && in_array($args[0], $avaliable_battles))
		{
			$_SESSION['ftgr']['battle'] = $args[0];
			return array(\ftgr\_('Battle') . ' ' . $args[0] . ' ' . \ftgr\_('now loaded') . \ftgr\_('!'));
		}
		return array(\ftgr\_('Error: Invalid battle'));
	}
}