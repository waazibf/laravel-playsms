<?php

namespace kataklys\Playsmsws\Facades;

use Illuminate\Support\Facades\Facade;

class Playsmsws extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'playsmsws';
	}
}

?>