<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserResponseVO implements HotmartSerializable
{
    // string
    private $nome;

    // string
    private $email;

    // string
    private $login;

    // string
    private $ucode;

    // string
    private $dddPhone;

    // string
    private $phone;

    // AddressResponseVO
    private $address;

    // string
    private $entityType;

    // string
    private $locale;

    // string
    private $urlPhoto;

    // string
    private $currencyCodeComission;

    // string
    private $timeZone;

    // array of DocumentVO
    private $documents;

    /**
     * @param $json
     *
     * @return UserResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new UserResponseVO();
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
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

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
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

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

    /**
     * Get the value of entityType
     */ 
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Set the value of entityType
     *
     * @return  self
     */ 
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;

        return $this;
    }

    /**
     * Get the value of locale
     */ 
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set the value of locale
     *
     * @return  self
     */ 
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get the value of urlPhoto
     */ 
    public function getUrlPhoto()
    {
        return $this->urlPhoto;
    }

    /**
     * Set the value of urlPhoto
     *
     * @return  self
     */ 
    public function setUrlPhoto($urlPhoto)
    {
        $this->urlPhoto = $urlPhoto;

        return $this;
    }

    /**
     * Get the value of currencyCodeComission
     */ 
    public function getCurrencyCodeComission()
    {
        return $this->currencyCodeComission;
    }

    /**
     * Set the value of currencyCodeComission
     *
     * @return  self
     */ 
    public function setCurrencyCodeComission($currencyCodeComission)
    {
        $this->currencyCodeComission = $currencyCodeComission;

        return $this;
    }

    /**
     * Get the value of timeZone
     */ 
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set the value of timeZone
     *
     * @return  self
     */ 
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get the value of documents
     */ 
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set the value of documents
     *
     * @return  self
     */ 
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }
}