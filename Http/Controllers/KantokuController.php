<?php
namespace App\Modules\Kantoku\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class KantokuController extends Controller
{

	use DispatchesCommands, ValidatesRequests;

	/**
	 * Initializer.
	 *
	 * @return \KagiController
	 */
	public function __construct()
	{
/*
		parent::__construct();
		$this->middleware('csrf');
		$this->middleware('auth');
*/
//		$this->middleware('guest');
		$this->middleware('admin');

	}

	/**
	 * Display Welcome
	 *
	 * @return Response
	 */
	public function welcome()
	{
//dd("loaded");
		return View('kantoku::kantoku');
	}

}
