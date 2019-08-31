<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;
class ProductSimplifiedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // string
    private $name;

    // string
    private $ucode;
    
   /**
     * @param $json
     *
     * @return ProductSimplifiedResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ProductSimplifiedResponseVO();
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
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
}