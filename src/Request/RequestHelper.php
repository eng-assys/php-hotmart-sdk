<?php

namespace Hotmart\Request;

class RequestHelper 
{
    /**
     * Remove empty keys of given array or object
     * 
     * @param $data Request Body Object to Remove Empty Keys
     * 
     * @return array $data The param array with the empty Keys removed
     * 
     */
    public static function removeEmptyKeys($data)
    {
        $data = !is_array($data) ? json_decode($data, true) : $data;
        if (!$data) return [];
        foreach ($data as $key => $value) {
            if (is_array($data[$key])) {
                $data[$key] = self::removeEmptyKeys($data[$key]);
            } else if ($value == null) {
                unset($data[$key]);
            }
        }
        return $data;
    }

    /**
     * Generate URL Query String using a given array params
     * 
     * @param array $queryParams An Array with the query attributes
     * 
     * @return string $queryString A string with the format ?query=value&query2=value2
     * 
     */
    public static function generateUrlQueryString($queryParams)
    {
        $queryParams = self::removeEmptyKeys($queryParams);
        $queryString = '';
        foreach ($queryParams as $key => $queryParam) {
            if (!empty($queryParam)) {
                $queryString .= (empty($queryString)) ? '?' : '&';
                $queryString .= (is_array($queryParam)) ? http_build_query(["$key" => $queryParam]) : "$key=$queryParam";
            }
        }
        return $queryString;
    }
}