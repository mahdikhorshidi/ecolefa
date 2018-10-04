<?php

namespace App\Http\Controllers\Schools;

use App\Models\School;
use App\Http\Controllers\Controller;

class BaseController extends Controller {

	/**
	 * Theme instance.
	 *
	 * @var \Facuz\Theme\Theme
	 */
	protected $school;

	/**
	 * Construct
	 *
	 * @return void
	 */
	public function __construct(School $school,$domain,$tld = null)
	{
        if (!isset($school->name)) {
            $school = \App\Models\School::where('domain', $domain . '.' . $tld)->first();
        }
        if (!isset($school->name)) {
            abort(404);
        }
	}

}