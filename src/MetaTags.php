<?php
namespace Badou\MetaTags;

class MetaTags
{
    protected $tags = [];

    public function set($name, $value)
    {
        $this->$tags[$name] = $value;
    }

    public function tag($name)
    {
        return $this->tags[$name] ? $this->tags[$name] : config("meta.$name");
    }
}
