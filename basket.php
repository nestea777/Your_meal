<?php
class Product {
    public $name;
    public $image;
    public $price;
    public $weight;

    public function __construct($name, $image, $price, $weight) {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->weight = $weight;
    }
}

class Cart {
    public $items = [];

    public function addItem($product, $quantity) {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function getTotalPrice() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['product']->price * $item['quantity'];
        }
        return $total;
    }
}

// Create products
$product1 = new Product('Супер сырный', 'img/burger1.jpg', 550, '512г');
$product2 = new Product('Сметанный соус', 'img/cheese.jpg', 40, '30мл');
$product3 = new Product('Лимонад', 'img/2.png', 79, '0,5л');

// Create cart
$cart = new Cart();
$cart->addItem($product1, 1);
$cart->addItem($product2, 2);
$cart->addItem($product3, 1);

// Output total price
echo "Итого: " . $cart->getTotalPrice() . "₽";
?>