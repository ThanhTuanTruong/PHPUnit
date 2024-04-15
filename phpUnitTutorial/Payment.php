<?php

namespace phpUnitTutorial;

use AuthorizeNetAIM;
use Exception;

class Payment
{
    const API_ID = 123456;
    const TRANS_KEY = 'TRANSACTION KEY';

    public function processPayment(AuthorizeNetAIM $transaction,array $paymentDetails)
    {
        $transaction->amount = $paymentDetails['amount'];
        $transaction->card_num = $paymentDetails['card_num'];
        $transaction->exp_date = $paymentDetails['exp_date'];

        $response = $transaction->authorizeAndCapture();

        if ($response->approved) {
            return $this->savePayment($response->transaction_id);
        }

        return throw new Exception('payment failed');
    }

    public function savePayment($transactionId)
    {
        return true;
    }
}