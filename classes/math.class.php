<?php 

class math extends pi{
    function mathStatic(){
        return parent::$number; //static özellikleri parent ve $ ön eki ile alabiliriz.
    }
}