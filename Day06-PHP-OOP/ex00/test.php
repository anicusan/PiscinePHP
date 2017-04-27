!#/usr/bin/php
<?php
class Swag{
	public $foo = 21;

	function __construct(array $kwargs)
	{
		echo "constructed\n";
		print_r($kwargs);
		return ;
	}
	function __destruct()
	{
		echo "deconstructed\n";
		return ;
	}
	function bar(){
		echo "barrrrr\n";
		echo "\nss".$this->foo."\n";
	}
}

$instance = new Swag(array('k1' => 21, 'k2' => 42, 'k3' => 63));
$instance2 = new Swag(array('k5' => 22));
echo '<br/>';
echo $instance->foo;
echo '<br/>';
$instance->bar();
echo '<br/>';
 ?>
