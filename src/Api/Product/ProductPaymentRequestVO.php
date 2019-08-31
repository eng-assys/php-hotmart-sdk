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
     * @param $json
     *
     * @return ProductPaymentRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ProductPaymentRequestVO();
        $newObject->populate($object);

        return $newObject;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    /**
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {

    }
    
}