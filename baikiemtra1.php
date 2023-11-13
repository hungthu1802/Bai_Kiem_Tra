<?php
/*Đáp án trắc nghiệm:
Câu 1: Kết quả được in ra màn hình của đoạn mã là : 5
Câu 2: D
Câu 3: D
Câu 4: A
Câu 5: A */
//Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Câu 1: <br>";
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimesInRange($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là:\n";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo "$i ";
        }
    }
    echo "<br>";
}
$start = 1; $end = 100;
$start = intval($start);
$end = intval($end);
findPrimesInRange($start, $end);

//Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp. 
echo "Câu 2: <br>";
// Tạo mảng kết hợp chứa thông tin sản phẩm
$products = array(
    "pencil" => array("name" => "pencil", "price" => 10.000, "quantity" => 100),
    "eraser" => array("name" => "eraser", "price" => 5.000, "quantity" => 200),
    "ruler" => array("name" => "ruler", "price" => 3.000, "quantity" => 150)
);

// Hiển thị thông tin của tất cả sản phẩm
foreach ($products as $product) {
    echo "<ul>";
    echo "<li>Product: " . $product["name"] . ", Price: $" . $product["price"] . ", Quantity: " . $product["quantity"]."</li>";
    echo "</ul>";
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
echo "Total value of all products: $ " . $totalValue ;

?>