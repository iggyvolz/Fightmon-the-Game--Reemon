<?php

namespace iMagine;

session_start();
if (!isset($_SESSION['iMagine']))
{
	die('No direct access');
}
if (is_null($_SESSION['iMagine']['cutscene']))
{
	die('Direct access not allowed');
}
header('Content-type: application/x-shockwave-flash');
readfile(realpath(__DIR__ . '/includes/cutscenes/' . $_SESSION['iMagine']['cutscene'] . '.swf'));
