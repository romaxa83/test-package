<?php

namespace romaxa\Pacman;

/**
 * 
 */
class Days
{
	private $bday;
	private $today; 

	function __construct($bday)
	{
		$this->bday = $bday;
		$this->today = date("Y-m-d");
	}

	public function countDays()
	{
		$btime = strtotime($this->bday);
		$time = strtotime($this->today);

		$total = $time - $btime;
		$days = floor($total /3600/24);

		return $days;
	}
}