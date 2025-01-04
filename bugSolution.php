```php
function processObjectArray(array &$arr) {
  foreach ($arr as $key => &$value) {
    $value->value = $value->value * 2; 
  }
}

$objects = [
  (object)['value' => 1],
  (object)['value' => 2],
];

processObjectArray($objects);
print_r($objects); // Output: Array ( [0] => stdClass Object ( [value] => 2 ) [1] => stdClass Object ( [value] => 4 ) )
```