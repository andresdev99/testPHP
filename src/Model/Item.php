<?php

class Item {
    
    // Public properties to store item information
    public $id;        // Unique identifier for the item
    public $name;      // Name of the item
    public $quantity;  // Quantity of the item
    public $price;     // Price per unit of the item
    
    /**
     * Constructor method to initialize an Item object with provided values.
     *
     * @param int $id        Unique identifier for the item.
     * @param string $name     Name of the item.
     * @param int $quantity    Quantity of the item.
     * @param float $price     Price per unit of the item.
     */
    public function __construct($id, $name, $quantity, $price) {
        // Assign values to the object properties during object creation
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
}
