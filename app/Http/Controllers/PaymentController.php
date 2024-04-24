<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Exception;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET'));
        $this->gateway->setTestMode(env('PAYPAL_TEST_MODE'));
    }
    
    public function purchase(Request $request)
    {
        try {

            $response = $this->gateway->purchase([
                'amount' => $request->amount,
                'currency' => $request->currency,
                'returnUrl' => $request->returnUrl,
                'cancelUrl' => $request->cancelUrl,
            ])->send();
    
            if ($response->isRedirect()) {

                return response()->json(
                    [
                        'status' => 200,
                        'data' => [
                            'redirect_url' => $response->getRedirectUrl(),
                            'payment_id' => $response->getTransactionReference()
                        ],
                        'message' => 'Payment processed successfully.'
                    ]
                );

            } else {

                return response()->json(
                    [
                        'status' => 500,
                        'error' => $response->getMessage(),
                        'message' => 'An error occurred while processing the payment. Please try again later.'
                    ]
                );

            }

        } catch (Exception $e) {
            return response()->json(
                [
                    'status' => 500,
                    'error' => $e->getMessage(),
                    'message' => 'An error occurred while processing the payment. Please try again later.'
                ]
            );
        }
    }

}
