<?php
/**
 * Created by IntelliJ IDEA.
 * User: omar-
 * Date: 21/04/2017
 * Time: 05:36
 */

namespace Linking\Flashr\Facades;


use Illuminate\Support\Facades\Facade;

class Flashr extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'flashr';
    }

}