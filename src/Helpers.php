<?php

namespace YnievesPuntoNetSURL\Qvapay;

/**
 * Helpers Class.
 *
 * @category Class
 *
 * @author   YnievesPuntoNet S.U.R.L
 *
 * @link     https://www.ynieves.net
 */
abstract class Helpers
{
    /**
     * Check if a string is JSON.
     *
     * @param string $string
     *
     * @return bool
     */
    public static function isJson(string $string): bool
    {
        json_decode($string);

        return json_last_error() === JSON_ERROR_NONE;
    }
}
