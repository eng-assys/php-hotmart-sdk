<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class ProductPaymentRequestVO implements HotmartSerializable
{
    // enum Required [ 'PAGAMENTO_UNICO', 'ASSINATURA', 'MULTIPLOS_PAGAMENTOS', 'PAGAMENTO_VISTA', 'INVOICE', 'SMART_INSTALLMENT' ]
    private $type;

    // enum Required [ 'SEVEN', 'FIFTEEN', 'THIRTY' ]
    private $warranty;

    // PaymentDetailsRequestVO Required
    private $details;

    // DiscountCupomRequestVO
    private $coupon;

   /**
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {

    }

    /**
     * @param string $json
     *
     * @return mixed
     */
    public static function fromJson(string $json)
    {

    }
    
}