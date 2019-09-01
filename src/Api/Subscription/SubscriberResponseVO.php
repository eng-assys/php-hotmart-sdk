<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class SubscriberResponseVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $email;

    // string
    private $dddPhone;

    // string
    private $phone;

    // string
    private $dddCell;

    // string
    private $cell;

    // string
    private $ucode;

    // AddressResponseVO
    private $address;

    /**
     * @param $json
     *
     * @return SubscriberResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new SubscriberResponseVO();
        $newObject->populate(json_decode($json));

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
        foreach (get_object_vars($this) as $key => $value) {
            $this->{$key} = $data->{$key} ?? null;
        }
    }
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of dddPhone
     */ 
    public function getDddPhone()
    {
        return $this->dddPhone;
    }

    /**
     * Set the value of dddPhone
     *
     * @return  self
     */ 
    public function setDddPhone($dddPhone)
    {
        $this->dddPhone = $dddPhone;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of dddCell
     */ 
    public function getDddCell()
    {
        return $this->dddCell;
    }

    /**
     * Set the value of dddCell
     *
     * @return  self
     */ 
    public function setDddCell($dddCell)
    {
        $this->dddCell = $dddCell;

        return $this;
    }

    /**
     * Get the value of cell
     */ 
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set the value of cell
     *
     * @return  self
     */ 
    public function setCell($cell)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get the value of ucode
     */ 
    public function getUcode()
    {
        return $this->ucode;
    }

    /**
     * Set the value of ucode
     *
     * @return  self
     */ 
    public function setUcode($ucode)
    {
        $this->ucode = $ucode;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}