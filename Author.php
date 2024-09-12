<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }


    public function show($type): array
    {
        if ($type == "name") {
            return ['name' => $this->name];
        } elseif ($type == "description") {
            return ['description' => $this->description];
        } else {
            return ['name' => $this->name, 'description' => $this->description];
        }
    }
}
