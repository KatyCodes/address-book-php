<?php
  class AddressBook
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

    function getStreetAddress()
    {
      return $this->streetAddress;
    }

    function getCity()
    {
      return $this->city;
    }

    function getState()
    {
      return $this->state;
    }
    function getZip()
    {
      return $this->zip;
    }

  }
 ?>
