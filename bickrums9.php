<?php

function calculateSum(array $numbers, callable $callback) {
    return $callback($numbers);
}

// Пример использования функции с анонимной функцией для нахождения суммы всех чисел в массиве
$numbers = [1, 2, 3, 4, 5];
$totalSum = calculateSum($numbers, function($numbers) {
    return array_sum($numbers);
});

echo "Сумма чисел: " . $totalSum;
