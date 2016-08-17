<?php
 require_once dirname(__FILE__) . '/../php-activerecord/ActiveRecord.php';

 ActiveRecord\Config::initialize(function($cfg)
 {
   $cfg->set_model_directory(dirname(__FILE__) . '/../models');
   $cfg->set_connections(array('development' => 'pgsql://postgres:natanahel@127.0.0.1/users'));
  //  $cfg->set_connections(array('development' => 'mysql://root:@127.0.0.1/users'));
});
// $jax = new user;
// $jax->nombre = 'Jax';
// $jax->pass = 'pass';
// $jax = new user(array('nombre' => 'Jax','pass' => 'pass'));
$data = array('nombre' => 'Jax','pass' => 'pass');
$jax = new user($data);
$jax->save();
// $post = user::create($data);
?>
