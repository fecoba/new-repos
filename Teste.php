<?php 
/**
 * testando GitHub desktop
 */
class Teste
{
	private $days;

	function __construct(argument)
	{
		$days = {'seg', 'ter', 'qua', 'qui', 'sex', 'sab', 'dom'};
	}

	public function toString(){
		return implode(', ', $days);
	}

	echo $days;
}
?>