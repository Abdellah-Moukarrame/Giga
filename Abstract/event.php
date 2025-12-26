<?php

abstract class Event {
    protected int $id;
    // public string $name;


    public function __construct($id)
    {
        $this->id = $id;
        // $this->name = $name;
    }
    public function __get($id)
    {
        $this->id = $id;
    }
    public function __set($id)
    {
        $this->id = $id;
    }
}