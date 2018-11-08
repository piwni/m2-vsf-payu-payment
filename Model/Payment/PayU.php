<?php


namespace Codemode\PayuVsfPayment\Model\Payment;

class PayU extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "vsf-payu";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
