<?php

namespace Deshi\Epay\Facades;

use Illuminate\Support\Facades\Facade;

class Epay extends Facade {
	
	public static function getFacadeAccessor(){ 
		return 'epay';
	}
}
