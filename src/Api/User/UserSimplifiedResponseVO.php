<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserSimplifiedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // string
    private $name;

    // array of UserBadgeResponseVO
    private $badges;

    /**
     * @param $json
     *
     * @return UserSimplifiedResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new UserSimplifiedResponseVO();
        $newObject->populate(json_decode($json)->body);

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
     * Get the value of badges
     */ 
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * Set the value of badges
     *
     * @return  self
     */ 
    public function setBadges($badges)
    {
        $this->badges = $badges;

        return $this;
    }
}