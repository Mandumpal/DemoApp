<?php 
class customer
{
	public $name;
	public function setName($name)
	{
	$this->name = $name;

	}
	public function getname()
	{
	return $this->name;
	}
}
$c = new customer();
$c->setName("sunil bhatia");
echo $c->name;





?>