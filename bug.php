```php
function processArray(array &$arr) {
  foreach ($arr as &$value) {
    $value = $value * 2;
  }
}

$numbers = [1, 2, 3, 4, 5];
processArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

$objects = [
  (object)['value' => 1],
  (object)['value' => 2],
];

processArray($objects); // This will not work as expected
print_r($objects); // Output: Array ( [0] => stdClass Object ( [value] => 1 ) [1] => stdClass Object ( [value] => 2 ) )
```