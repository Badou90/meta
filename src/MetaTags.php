<?php
namespace Badou\MetaTags;

class MetaTags
{
    protected $tags = [];

    public function set($name, $value)
    {
        $this->tags[$name] = $value;
    }

    public function tag($name)
    {
        return !empty($this->tags[$name]) ? $this->tags[$name] : config("metatags.$name");
    }
}
