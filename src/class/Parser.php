<?php

class Parser implements ParserInterface {
    static function parse($path) {
        if(!file_exists($path)) {
            throw new Exception("{$path} doesn't exist.");
        }
    }
}