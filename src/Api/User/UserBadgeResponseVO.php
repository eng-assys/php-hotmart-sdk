<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserBadgeResponseVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $summary;

    // string
    private $title;

    // string
    private $imageUrl;

    /**
     * @param $json
     *
     * @return UserBadgeResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new UserBadgeResponseVO();
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
     * Get the value of summary
     */ 
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     *
     * @return  self
     */ 
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of imageUrl
     */ 
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set the value of imageUrl
     *
     * @return  self
     */ 
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }
}