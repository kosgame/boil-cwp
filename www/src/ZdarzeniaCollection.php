<?php

class ZdarzeniaCollection
{

    private $zdarzenia = [];

    public function add(Zdarzenie $zdarzenie){
        $zdarzenia[] = $zdarzenie;
    }
}