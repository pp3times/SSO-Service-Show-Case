<?php

namespace App\Models;

use Laravel\Passport\Client;

class Passport extends Client
{
	public function skipsAuthorization()
	{
		// dd($this);
		// false: หยุด Authorization
		return false;
	}
}
