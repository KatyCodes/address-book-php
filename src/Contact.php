<?php
  class Contact
  {
    private $name;
    private $streetAddress;
    private $city;
    private $state;
    private $zip;

    function __construct($name, $streetAddress, $city, $state, $zip)
    {
        $this->name = $name;
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;

    }
    function getName()
    {
      return $this->name;
    }

    function setName()
    {
      $this->name = (string) $name;
    }

    function getStreetAddress()
    {
      return $this->streetAddress;
    }

    function setStreetAddress()
    {
      $this->streetAddress = (string) $streetAddress;
    }

    function getCity()
    {
      return $this->city;
    }

    function setCity()
    {
      $this->city = (string) $city;
    }

    function getState()
    {
      return $this->state;
    }

    function setState()
    {
      $this->state = (string) $state;
    }

    function getZip()
    {
      return $this->zip;
    }

    function setZip()
    {
      $this->zip = (string) $zip;
    }

    function save()
    {
      array_push($_SESSION["allAddresses"], $this);
    }
    static function getAll()
    {
        return $_SESSION['allAddresses'];
    }

    static function deleteAll()
    {
      return $_SESSION= array();
    }

  }
 ?>
