```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array case
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

// Example usage:
$numbers = [10, 20, 30, 40, 50];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 30

$emptyNumbers = [];
$averageEmpty = calculate_average($emptyNumbers);
echo "Average of empty array: " . $averageEmpty; //Output: Average of empty array: 0

//Example of unexpected behavior
$numbersWithZero = [10, 0, 20, 30];
$averageWithZero = calculate_average($numbersWithZero);
echo "Average with zero: ". $averageWithZero; //Output: Average with zero: 15

$numbersWithNegative = [10, -20, 30];
$averageWithNegative = calculate_average($numbersWithNegative);
echo "Average with negative: ". $averageWithNegative; //Output: Average with negative: 6.6666666666667
```