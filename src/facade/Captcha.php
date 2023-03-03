<?php

namespace simplestadmin\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package think\captcha\facade
 * @mixin \simplestadmin\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \simplestadmin\captcha\Captcha::class;
    }
}
