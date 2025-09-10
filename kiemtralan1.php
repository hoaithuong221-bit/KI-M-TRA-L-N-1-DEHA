<?php
// Câu 8: Viết function giải phương trình bậc 2
function giaiPTBac2($a, $b, $c) {
    if ($a == 0) {
        // Trường hợp phương trình bậc 1: bx + c = 0
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình có vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            $x = -$c / $b;
            return "Phương trình có một nghiệm: x = " . $x;
        }
    }

    // Tính delta
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x1 = x2 = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}
echo giaiPTBac2(1, -3, 2) . "\n";

// Câu 9: Viết function in ra màn hình chữ nhật rỗng có kích thước 5x7 sử dụng dấu sao ( dùng vòng lặp)
// Function in ra chữ nhật rỗng 5x7
function inChuNhat($height, $width) {
    for ($i = 1; $i <= $height; $i++) {
        for ($j = 1; $j <= $width; $j++) {
    
            if ($i == 1 || $i == $height || $j == 1 || $j == $width) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n"; 
    }
}
 inChuNhat(5,7);

// Câu 10 Viết function tính trung bình cộng của mảng
function tinhTrungBinh($arr) {
    // Kiểm tra mảng rỗng
    if (count($arr) == 0) {
        return null; 
    }

    $tong = 0;
    foreach ($arr as $value) {
        $tong += $value;
    }

    $trungBinh = $tong / count($arr);
    return $trungBinh;
    
}
$mang = [2, 4, 6, 8, 10];
echo "Trung bình cộng = " . tinhTrungBinh($mang) . "\n";

