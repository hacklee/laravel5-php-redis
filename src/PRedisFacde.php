<?php

namespace Hacklee;

use Illuminate\Support\Facades\Facade;

class PRedisFacde extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'predis';
	}
}