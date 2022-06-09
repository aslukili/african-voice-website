<?php
/**
 * User: aslukili
 * Date: 7/7/2020
 * Time: 10:53 AM
 */

namespace app\core;


/**
 * Class Response
 *
 * @author  Abdeslam Loukili <abdeslam.edu@gmail.com>
 * @package app\core
 */
class Response
{
    //statusCode not used since we start using Exceptions
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}