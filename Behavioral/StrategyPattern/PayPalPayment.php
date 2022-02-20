<?php


namespace AppBehavioral\StrategyPattern;

/**
 * This Concrete Strategy provides a payment form and validates returns for
 * PayPal payments.
 */
class PayPalPayment implements PaymentMethod
{
  public function getPaymentForm(Order $order): string
  {
    $returnURL = "https://our-website.com/" .
        "order/{$order->id}/payment/paypal/return";

    return <<<FORM
<form action="https://paypal.com/payment" method="POST">
    <input type="hidden" id="email" value="{$order->email}">
    <input type="hidden" id="total" value="{$order->total}">
    <input type="hidden" id="returnURL" value="$returnURL">
    <input type="submit" value="Pay on PayPal">
</form>
FORM;
  }

  public function validateReturn(Order $order, array $data): bool
  {
    echo "PayPalPayment: ...validating... ";

    // ...

    echo "Done!\n";

    return true;
  }
}