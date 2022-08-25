<?php

class Home_model extends Controller{
    private $nama = "Akbar";

    public function getData()
    {
        return $this->nama;
    }
}