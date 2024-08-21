pragma solidity ^0.5.16;

contract ProductRegistry {
    struct Product {
        string name;
        string description;
        string price;
    }

    mapping(uint => Product) public products;
    uint public productCount;

    function addProduct(string memory name, string memory description, string memory price) public {
        productCount++;
        products[productCount] = Product(name, description, price);
    }
}
