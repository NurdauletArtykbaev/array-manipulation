$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],
];
$shippingCostPercentage = 2;

function addChippingCoast(&$products, $shippingCostPercentage)
{
    $productLength = count($products);
    for ($i = 0; $i < $productLength; $i++) {
        $products[$i]['shipping_cost'] = $products[$i]['price'] * $shippingCostPercentage / 100;
    }
    return $products;
}

addChippingCoast($products, $shippingCostPercentage);

print_r($products);
