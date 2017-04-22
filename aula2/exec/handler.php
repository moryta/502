<?php

class Files
{
    const PATH = 'uploads/';
    protected $file;

    public function __construct($file)
    {
        $this->file = fopen($file);
    }

    public function save_file($src=$this->PATH)
    {
        if(move_uploaded_file()){

        }
    }
}
