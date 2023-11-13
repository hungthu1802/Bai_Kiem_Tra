<?php

echo " Trắc nghiệm <br> Câu 1: 5 <br> Câu 2: D <br> Câu 3: D <br> Câu 4: A <br> Câu 5: A <br>";
echo "Bài 1: <br>   ";
function isPrime($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $canBacHai = sqrt ( $n );
    for($i = 2; $i <= $canBacHai; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (isPrime ( $i )) {
        echo ($i . ", ");
    }
}

echo "<br> Bài 2: <br>";

// Tạo mảng kết hợp chứa thông tin sản phẩm
$products = array(
    "SP1" => array("name" => "Áo", "price" => 3.0, "quantity" => 3),
    "SP2" => array("name" => "Quần", "price" => 3.0, "quantity" => 2),
    "SP3" => array("name" => "Mũ", "price" => 1.5, "quantity" => 2)
);

// Hiển thị thông tin của tất cả sản phẩm
foreach ($products as $product) {
    echo "Product: " . $product["name"] . ", Price: $" . $product["price"] . ", Quantity: " . $product["quantity"] . "<br>";
}

// Viết hàm tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product["price"] * $product["quantity"];
    }
    return $totalValue;
}

$totalValue = calculateTotalValue($products);
echo "Total value of all products: $" . $totalValue;
?>







}

?>

