<?php
class Tyrion extends Lannister
{
	public function will($obj)
	{
		if (get_parent_class($obj) !== 'Lannister')
			return ("Let's do this.");
		else
			return ("Not even if I'm drunk !");
	}
}
?>