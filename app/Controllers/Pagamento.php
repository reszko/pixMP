<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pagamento extends BaseController
{
	public function index()
	{
		\MercadoPago\SDK::setAccessToken(KEY_MP);

		$payment = new \MercadoPago\Payment();

		$pagamentos = $payment->search([
			'sort' => 'date_created',
			'criteria' => 'desc'
		])->getIterator();


		echo view('pagamentos', [
			'pagamentos' => $pagamentos
		]);
	}

	public function do()
	{
		$post = $this->request->getPost();

		\MercadoPago\SDK::setAccessToken(KEY_MP);

		$payment = new \MercadoPago\Payment();

		$payment->transaction_amount = $post['valor'];
		$payment->description = $post['produto'];
		$payment->payment_method_id = "pix";
		$payment->payer = array(
			"email" => "seu@email.com",
			"first_name" => "Seu",
			"last_name" => "Nome",
			"identification" => array(
				"type" => "CPF",
				"number" => "19119119100"
			)
		);

		// dd($payment);
		if ($payment->save()) {
			$dados = [
				'qr_code_base64' => $payment->point_of_interaction->transaction_data->qr_code_base64,
				'qr_code' => $payment->point_of_interaction->transaction_data->qr_code,
				'payment_id' => $payment->id,
				'valor' => $post['valor'],
				'produto' => $post['produto']

			];
			echo view('qrcode', $dados);
		}
	}

	public function get($payment_id)
	{
		\MercadoPago\SDK::setAccessToken(KEY_MP);

		$payment = new \MercadoPago\Payment();

		//dd($payment->get($payment_id));

		echo view('status', [
			'status' => $payment->get($payment_id)->status
		]);
	}
}
