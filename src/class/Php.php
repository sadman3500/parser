<?php

class Php extends Parser {
    public function parse($path) {
        if(!parent::parse($path)) {
            return false;
        }
        $data = require($path);
        if(is_callable($data)) {
            return call_user_func($data);
        }
        if(!is_array($data)) {
            throw new InvalidFormatExcepttion("{$path} has invalid data format.");
        }
        return $data;
    }
}