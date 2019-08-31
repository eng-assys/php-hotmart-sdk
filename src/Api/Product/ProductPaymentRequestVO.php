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
    

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of warranty
     */ 
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Set the value of warranty
     *
     * @return  self
     */ 
    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;

        return $this;
    }

    /**
     * Get the value of details
     */ 
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set the value of details
     *
     * @return  self
     */ 
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get the value of coupon
     */ 
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set the value of coupon
     *
     * @return  self
     */ 
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;

        return $this;
    }
}