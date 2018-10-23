<?php
require 'vendor/autoload.php';
if (isset($_ENV['CLEARDB_DATABASE_URL'])) {
      $db = \atk4\data\Persistence::connect($_ENV['CLEARDB_DATABASE_URL']);
  } else {
      $db = \atk4\data\Persistence::connect('mysql:host=127.0.0.1;dbname=travel_agency;charset=utf8', 'root', '');
    }
    class Client extends \atk4\data\Model {
      public $table = 'client';
      function init() {
       parent::init();
       $this->addField('name',['caption'=>'имя']);
        $this->addField('surname');
        $this->addField('age');
        $this->addField('gmail');
        $this->hasOne('City', new City)->addTitle();
    }
  }
  class Country extends \atk4\data\Model {
    public $table = 'country';
    function init() {
     parent::init();
     $this->addField('name',['caption'=>'страна']);
      $this->addField('capital');
      $this->addField('currency');
      $this->hasMany('City', new City);
  }
}
class City extends \atk4\data\Model {
  public $table = 'city';
  function init() {
   parent::init();
   $this->addField('name',['caption'=>'город']);
    $this->hasMany('Client', new Client);
    $this->hasOne('Country', new Country)->addTitle();
}
}
