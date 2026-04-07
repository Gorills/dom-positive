<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\FlatReserve;

class FlatReserveController extends Controller
{
	public function __construct() {
	$this->middleware('auth');
	}

	public function index(Authenticatable $me) {
		return view('flat-reserve.index', ['me' => $me, 'flatReserve' => FlatReserve::orderBy('id', 'desc')->paginate(15)]);
	}

	public function delete(Authenticatable $me, $flatReserveId) {
	$flatReserve = FlatReserve::find($flatReserveId);

	if(!$flatReserve || !$flatReserve->id) return redirect()->route('flat-reserve.index')->with('errors', ['Не найдено брони с таким идентификатором']);
	if($flatReserve->delete()) return redirect()->route('flat-reserve.index')->with('success', 'Бронь #'. $flatReserveId .' успешно удалена');
	}
}