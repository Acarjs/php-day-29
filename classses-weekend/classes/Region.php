<?php 

require_once "DB.php";


class Region {

    public $id = null;
    public $name = null;
    public $slug = null;

    public function insert()
    {
        DB::insert(
            "
            INSERT
            INTO `regions`
            (`name`,`slug`)
            VALUES
            (?,?);
            ", [
                $this->name,
                $this->slug,
            ]

            );
       $this->id = DB::lastInsertId();     
    }

}