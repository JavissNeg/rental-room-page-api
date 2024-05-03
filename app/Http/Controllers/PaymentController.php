<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Omnipay\Omnipay;
use Exception;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->initialize(
            [
                'clientId' => env('PAYPAL_CLIENT_ID'),
                'secret' => env('PAYPAL_SECRET'),
                'testMode' => env('PAYPAL_TEST_MODE')
            ]
        );
        
    }
    
    public function purchase(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(), 
                [
                    'amount' => 'required|numeric',
                    'currencyCode' => 'required|string',
                    'returnUrl' => 'required|url',
                    'cancelUrl' => 'required|url',
                    'payment_type' => 'required|string',
                    'amount' => 'required|numeric',
                    'property_id' => 'required|numeric',
                    'lessee_id' => 'required|numeric'
                ]
            );

           if ($validator->fails()) {

                return response()->json(
                    [
                        'status' => 400,
                        'errors' => $validator->errors(),
                        'message' => 'Invalid input. Please provide the required fields.'
                    ]
                );

            } else {

                $response = $this->gateway->purchase(
                    [
                        'amount' => $request->amount,
                        'currency' => $request->currencyCode,
                        'returnUrl' => $request->returnUrl,
                        'cancelUrl' => $request->cancelUrl
                    ]
                )->send();
                
        
                if ($response->isRedirect()) {
                    
                    $payment = Payment::create(
                        [
                            'payment_key' => $response->getTransactionReference(),
                            'payment_type' => $request->payment_type,
                            'payment_status_id' => 1,
                            'amount' => $request->amount,
                            'property_id' => $request->property_id,
                            'lessee_id' => $request->lessee_id
                        ]
                    );

                    $payment->redirect_url = $response->getRedirectUrl();

                    if ($payment) {
                   
                        return response()->json(
                            [
                                'status' => 200,
                                'data' => $payment,
                                'message' => 'Payment processed successfully.'
                            ]
                        );

                    } else {

                        return response()->json(
                            [
                                'status' => 500,
                                'error' => 'An error occurred while processing the payment. Please try again later.',
                                'message' => 'An error occurred while processing the payment. Please try again later.'
                            ]
                        );

                    }
    
                } else {
    
                    return response()->json(
                        [
                            'status' => 500,
                            'error' => $response->getMessage(),
                            'message' => 'An error occurred while processing the payment. Please try again later.'
                        ]
                    );
    
                }

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

    public function paymentCheck(Request $request) {

        $transaction = $this->gateway->completePurchase([
            'payer_id'  => $request->get('PayerID'),
            'transactionReference' => $request->get('paymentId'),
        ])->send();

        if ($transaction->isSuccessful()) {
            // El pago fue exitoso. Puedes procesar la compra aquí.
            return response()->json([
                'status' => 200,
                'message' => 'Payment was successful.',
            ]);
        } else {
            // Hubo un problema con el pago.
            return response()->json([
                'status' => 500,
                'message' => 'Payment failed.',
            ]);
        }
    }

}
