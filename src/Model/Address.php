<?php
class Address
{
  // Public properties to store address information
  public $address_name; // Name or label for the address (optional)
  public $line_1;       // First line of the address
  public $line_2;       // Second line of the address
  public $city;         // City of the address
  public $state;        // State or region of the address
  public $zip;          // ZIP code of the address

  /**
   * Constructor method to initialize an Address object with provided values.
   *
   * @param string $line_1 First line of the address.
   * @param string $line_2 Second line of the address.
   * @param string $city City of the address.
   * @param string $state State or region of the address.
   * @param string $zip ZIP code of the address.
   * @param string $address_name Name or label for the address (optional).
   */
  public function __construct($line_1, $line_2, $city, $state, $zip, $address_name = "")
  {
      // Assign values to the object properties during object creation
      $this->line_1       = $line_1;
      $this->line_2       = $line_2;
      $this->city         = $city;
      $this->state        = $state;
      $this->zip          = $zip;
      $this->address_name = $address_name;
    }
}
