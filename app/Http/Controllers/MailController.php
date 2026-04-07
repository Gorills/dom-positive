<?php
namespace App\Http\Controllers;
use App\Models\FlatReserve;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class MailController
 * @package App\Http\Controllers
 *
 * конфиг в файле .env (образец)
 * MAIL_DRIVER = smtp
 * MAIL_HOST = smtp.yandex.ru
 * MAIL_PORT = 465
 * MAIL_USERNAME = info@xn----dtbenfaypcj0b.xn--p1ai   #info@дом-позитив.рф
 * MAIL_PASSWORD = info123qwe
 * MAIL_ENCRYPTION = ssl
 */
class MailController extends Controller {

	public function html_email(Request $request) {
		$name = $request->input('name');
		$phone = $request->input('phone');
		$linkPage = $request->input('linkPage');

		if (empty($name) || empty($phone) || empty($linkPage)) return 'error';

		$fr = new FlatReserve();
		$fr->name = $name;
		$fr->phone = $phone;
		$fr->link_page = $linkPage;
		$fr->save();

		$data = ['name' => $name, 'phone' => $phone, 'linkPage' => $linkPage];
		Mail::send('mail.reserve', $data, function($message) {
			$message->to('payment@capitalgroupcorp.com', 'Tutorials Point')->subject('Бронирование квартиры на сайте Дом Позитив');
			$message->from('info@xn----dtbenfaypcj0b.xn--p1ai','Бронирование Дом-позитив.рф');
		});

		echo 'done';
	}
}