```php
$array = [1, 2, 3];
foreach ($array as $key => $value) {
  if ($value === 2) {
    unset($array[$key]);
  }
}
print_r($array); // Output: Array ( [0] => 1 [2] => 3 )

$array = [1, 2, 3];
foreach ($array as $value) {
  if ($value === 2) {
    unset($array[$value]);
  }
}
print_r($array); // Output: Array ( [0] => 1 [2] => 3 )

//The following code does not work as intended
$array = [1, 2, 3];
foreach ($array as $key => $value) {
  if ($value === 2) {
    unset($array[$key]);
    break;
  }
}
print_r($array); // Output: Array ( [0] => 1 [2] => 3 )
```