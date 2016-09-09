<?php
  class Contact
  {
    private $name;
    private $streetAddress;
    private $city;
    private $state;
    private $zip;
    private $phone;

    function __construct($name, $streetAddress, $city, $state, $zip, $phone)
    {
        $this->name = $name;
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->phone = $phone;

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

    function getPhone()
    {
      return $this->phone;
    }

    function setPhone()
    {
      $this->phone = (string) $phone;
    }

    function save()
    {
      array_push($_SESSION["list_of_contacts"], $this);
    }
    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
      return $_SESSION= array();
    }

  }
 ?>
