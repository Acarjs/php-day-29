<?php

class Region
{

  public $id = null;
  public $name = null;
  public $slug = null;

  public function insert()
  {
    DB::insert(
      "
  INSERT INTO `regions`
  (`name`, `slug`)
  VALUES
  (?,?)
  ",
      [
        $this->name,
        $this->slug
      ]
    );
    $this->id = DB::lastInsertId();
  }

  public function update()
  {
    DB::update(
      "
  UPDATE `regions`
SET `name` = ?,
    `slug` = ?

WHERE `id` = ?
  ",
      [
        $this->name,
        $this->slug,
        $this->id
      ]
    );
  }

  public function save()
  {
    if ($this->id == null) {
      $this->insert();
    } else {
      $this->update();
    }
  }

  public function delete()
  {
    if ($this->id == null) {
      return;
    } else {
      DB::delete(
        "
    DELETE
FROM `regions`
WHERE `id` = ?
  ",
        [
          $this->id
        ]
      );
    }
  }
}
