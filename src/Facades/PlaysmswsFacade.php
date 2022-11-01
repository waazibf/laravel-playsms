<?php 

namespace waazibf\Playsmsws\Facades;

use Illuminate\Support\Facades\Facade;

class PlaysmswsFacade extends Facade 
{
	/**
     * Get the registered name of the component.
     *
     * @return string
     */
	protected static function getFacadeAccessor()
	{
		return 'waazibf\Playsmsws\Playsmsws';
	}
}

?>