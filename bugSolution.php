```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array case
  }

  //Filter out non-numeric values
  $numericNumbers = array_filter($numbers, 'is_numeric');

  if (empty($numericNumbers)){
    return 0.0; //Handle case where all values are non-numeric
  }

  $sum = array_sum($numericNumbers);
  $count = count($numericNumbers);
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

$numbersWithNonNumeric = [10, 'a', 20, 30];
$averageWithNonNumeric = calculate_average($numbersWithNonNumeric);
echo "Average with Non-numeric values: ". $averageWithNonNumeric; //Output: Average with Non-numeric values: 20

$numbersWithNegative = [10, -20, 30];
$averageWithNegative = calculate_average($numbersWithNegative);
echo "Average with negative: ". $averageWithNegative; //Output: Average with negative: 10
```