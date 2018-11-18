<?php

use PHPUnit\Framework\TestCase;

class DaysTest extends TestCase
{
	public function testTodayZero()
	{
		$todayDate = date('Y-m-d');
		$days = new \romaxa\Pacman\Days($todayDate);
		$totalDays = $days->countDays();

		$this->assertEquals(0,$totalDays);	
	}

	public function testBackToYear()
	{
		$todayDate = date('Y-m-d',time() - 365 * 24 * 3600);
		$days = new \romaxa\Pacman\Days($todayDate);
		$totalDays = $days->countDays();

		$this->assertEquals(365,$totalDays);	
	}
}