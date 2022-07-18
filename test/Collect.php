<?php

namespace test;

trait Collect
{
    public function Add(&$arr) {
        $arr[] = $this;
    }
}