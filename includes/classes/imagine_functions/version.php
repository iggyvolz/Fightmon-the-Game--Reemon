<?php

namespace iMagine_functions;

trait version
{

	public function version($person=NULL,...$excess)
	{
		$describe=`git describe --tags|tr -d '\n'`;
		if(strpos($describe,"-")===FALSE)
		{
			return array(sprintf(\iMagine\_("On version %s."),$describe));
		}
		//list($version,$plusminus)=explode("-",$describe);
		//return [Texts.AHEAD_OF.replace("%1",version).replace("%2",plusminus),Texts.LAST_COMMIT.replace("%1",iMagineVersion.COMMIT_HASH).replace("%2",iMagineVersion.COMMIT_MSG)];
		return [sprintf(\iMagine\_("Ahead of %s by %u commits."),...explode("-",$describe)),sprintf(\iMagine\_("Last commit: %s, message \"%s\""),`git log -1 --pretty=%H|tr -d '\n'`,`git log -1 --pretty=%B|tr -d '\n'`)];
	}
}
