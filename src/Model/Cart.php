<?php
class Cart
{
    /**
     * @var string The customer's first name.
     */
    public $customerFirstName;

     /**
     * @var string The customer's last name.
     */
    public $customerLastName;

    /**
     * @var Address|null The shipping address for the cart.
     */
    public $shippingAddress;

    /**
     * @var array The array of items in the cart.
     */
    public $items = [];
    
    /**
     * @var float The tax rate applied to the cart total.
     */
    public $tax = 0.07;

    /**
     * Set the customer name based on a Customer object.
     *
     * @param Customer $customer The customer object containing first and last names.
     */
    public function setCustomerName(Customer $customer)
    {
        $this->customerFirstName = $customer->first_name;
        $this->customerLastName = $customer->last_name;
    }

    /**
     * Get the full customer name.
     *
     * @return string The concatenated first and last names.
     */
    public function getCustomerName()
    {
        // Concatenate customer first and last names
        return $this->customerFirstName . " " . $this->customerLastName;
    }

    /**
     * Get the list of items in the cart.
     *
     * @return array The array of items in the cart.
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the shipping address based on an Address object.
     *
     * @param Address $address The address object to set as the shipping address.
     */
    public function setShippingAddress(Address $address)
    {
        $this->shippingAddress = $address;
    }

    /**
     * Get the shipping address.
     *
     * @return Address|null The shipping address or null if not set.
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Add an item to the cart.
     *
     * @param Item $item The item to add to the cart.
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }


    /**
     * Calculate the cost of a specific item in the cart.
     *
     * @param int $itemId The ID of the item to calculate the cost for.
     * @return string The calculated cost including shipping and tax.
     */    
    public function calculateCostOfItem($itemId)
    {
        $itemInfo = $this->getItem($itemId);
        if ($itemInfo instanceof Item) {
            // Calculate subtotal, tax, and total including shipping rate
            $subtotal = $itemInfo->quantity * $itemInfo->price;
            $tax = $subtotal * $this->tax;
            $total = $subtotal + $tax + $this->getShippingRate();
            
            return "Cost of item in cart, including shipping and tax: $total";
        }

        return "The item does not exist";
    }

    /**
     * Get information about a specific item in the cart.
     *
     * @param int $itemId The ID of the item to retrieve information for.
     * @return Item|string The item information or a string if the item is not found.
     */    
    public function getItem($itemId)
    {
        foreach ($this->items as $item) {
            // Check if item ID matches the provided ID
            if ($item->id == $itemId) return $item;
        }

        return "Item not found";
    }

    /**
     * Calculate the total cost of all items in the cart.
     *
     * @return string The subtotal and total cost information.
     */    
    public function calculateTotalCost()
    {
        $subtotal = 0;
        foreach ($this->items as $item) {
            // Calculate subtotal based on item quantity and price
            $subtotal += $item->quantity * $item->price;
        }

        // Assume there's a method to get shipping rate and apply tax
        $shippingRate = $this->getShippingRate(); 
        $taxRate = $this->tax;
        $tax = $subtotal * $taxRate;
        $total = $subtotal + $tax + $shippingRate;

        // Return a string with subtotal and total information
        return "Subtotal: $subtotal - Total: $total";
    }

    /**
     * Get the shipping rate from an external service.
     *
     * @return float The shipping rate.
     */    
    private function getShippingRate()
    {
        // Assume this method fetches the shipping rate from an external service
        // You can implement this based on your system's requirements
        return 10; // Just a placeholder value
    }
}
