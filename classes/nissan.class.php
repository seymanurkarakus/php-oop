<?php

class nissan extends car
{
    public function info(): string
    {
        $text = "<h3> japon malı " . $this->name. "</h3>";
        return $text; //miras aldığımız soyut metodu kullanmak ve stringini return etmeye mecburuz
    }
}
