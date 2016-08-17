<?php
class user extends ActiveRecord\Model
{
  static $table_name = 'user';
  static $validates_presence_of =array(
  // 'id','nombre','pass');
    array('nombre'), array('pass'));

}
?>
