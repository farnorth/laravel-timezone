<?php namespace Mannysoft\Timezone\Facades;

use Illuminate\Support\Facades\Facade;

class Timezone extends Facade {
	public static function getFacadeAccessor()
	{
		return 'timezone';
	}
}
