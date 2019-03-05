<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 04/03/19
 * Time: 21:51
 */

namespace App;


abstract class Book
{
    protected $title;
    protected $description;
    protected $qtyPages;
    protected $nameOwner;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getQtyPages()
    {
        return $this->qtyPages;
    }

    /**
     * @param mixed $qtyPages
     */
    public function setQtyPages($qtyPages)
    {
        $this->qtyPages = $qtyPages;
    }

    /**
     * @return mixed
     */
    public function getNameOwner()
    {
        return $this->nameOwner;
    }

    /**
     * @param mixed $nameOwner
     */
    public function setNameOwner($nameOwner)
    {
        $this->nameOwner = $nameOwner;
    }
}