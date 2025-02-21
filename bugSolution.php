```php
//Best solution, use array_filter
$array = [1, 2, 3];
$array = array_filter($array, fn($value) => $value !== 2);
print_r($array); // Output: Array ( [0] => 1 [2] => 3 )

//Alternative solution using a while loop
$array = [1, 2, 3];
$i = 0;
while ($i < count($array)) {
    if ($array[$i] === 2) {
        unset($array[$i]);
    } else {
        $i++;
    }
}
print_r($array); //Output: Array ( [0] => 1 [2] => 3 ) 

```