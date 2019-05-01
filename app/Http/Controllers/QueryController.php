<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
	public function get(Request $request)
	{
		$collection = DB::table('employees')
			->select()
			->get();

		return $collection->groupBy('team_id')->toJson();
	}
}
