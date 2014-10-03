<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    protected $table = 'usuario';
    protected $hidden = array('password', 'remember_token');

    public function set_password($string) {
        $this->set_attribute('password',Hash::make($string));
    }

}
