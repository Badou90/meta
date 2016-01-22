<?php
namespace Badou\MetaTags\Facades;

use Illuminate\Support\Facades\Facade;

class MetaTags extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'metatags';
    }
}
