<?php

class Customer {

    // Public properties to store customer information
    public $first_name;      // First name of the customer
    public $last_name;       // Last name of the customer
    public $addresses = [];  // Array to store customer addresses

    /**
     * Constructor method to initialize a Customer object with provided values.
     *
     * @param string $first_name First name of the customer.
     * @param string $last_name Last name of the customer.
     * @param Address $address Address object representing the customer's address.
     */
    public function __construct($first_name, $last_name, Address $address)
    {
        // Assign values to the object properties during object creation
        $this->first_name  = $first_name;
        $this->last_name   = $last_name;
        $this->addAddress($address); // Call the addAddress method to add the provided address
    }

    /**
     * Method to add an address to the customer's addresses array.
     *
     * @param Address $address Address object to be added.
     */
    public function addAddress(Address $address)
    {
        // Add the provided address to the addresses array using the address name as the key
        $this->addresses[$address->address_name] = $address;
    }

    /**
     * Method to get all addresses associated with the customer.
     *
     * @return array An array containing the customer's addresses.
     */
    public function getCustomerAddress()
    {
        // Return the array containing the customer's addresses
        return $this->addresses;
    }

        /**
     * Get the full customer name.
     *
     * @return string The concatenated first and last names.
     */
    public function getCustomerName()
    {
        // Concatenate customer first and last names
        return $this->first_name . " " . $this->last_name;
    }
}
