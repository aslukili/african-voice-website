<?php
/**
 * User: aslukili
 * Date: 7/25/2020
 * Time: 11:35 AM
 */

namespace app\core\exception;


use app\core\Application;

/**
 * Class ForbiddenException
 *
 * @author  Abdeslam Loukili <abdeslam.edu@gmail.com>
 * @package app\core\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}