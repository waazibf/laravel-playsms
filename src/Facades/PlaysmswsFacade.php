<?php

namespace kataklys\Playsmsws\Facades;

use Illuminate\Support\Facades\Facade;

class PlaysmswsFacade extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'kataklys\Playsmsws\Playsmsws';
	}
}

?>