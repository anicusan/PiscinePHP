<?php
Class NightsWatch implements IFighter
{
	private $arr;

	public function recruit($smb)
	{
		if ($smb instanceof IFighter)
			$this->arr[] = $smb;
	}
	public function fight()
	{
		foreach ($this->arr as $key => $value) {
			$value->fight();
		}
	}
}
?>