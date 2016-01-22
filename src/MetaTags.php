<?php
namespace Badou\MetaTags;

class MetaTags
{
    protected $title;
    protected $keywords;
    protected $description;

    public function title()
    {
        $title = ($this->title)?$this->title:config('metatags.title.default');

        if($this->title)
            $title = config('metatags.title.prepend').$title.config('metatags.title.append');

        return "<title>{$title}</title>";
    }

    public function keywords()
    {
        $keywords = ($this->keywords)?$this->keywords:config('metatags.keywords.default');
        return "<meta name='keywords' content='{$keywords}'>";
    }

    public function description()
    {
        $description = ($this->description)?$this->description:config('metatags.description.default');
        return "<meta name='description' content='{$description}'>";
    }

    public function set($type, $value)
    {
        $this->$type = $value;
    }
}
