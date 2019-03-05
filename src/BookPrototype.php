<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 21:54
 */

namespace App;


class BookPrototype extends Book
{
    public function __construct($name = "", $description = "", $qtyPages = 1)
    {
        $this->setTitle($name);
        $this->setDescription($description);
        $this->setQtyPages($qtyPages);
    }

    public function __clone()
    {
        echo "Object cloned\n";
    }
}