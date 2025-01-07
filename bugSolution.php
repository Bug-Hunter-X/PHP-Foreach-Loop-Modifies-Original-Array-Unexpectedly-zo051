```php
function processData(array $data): array {
  // Create a copy to avoid modifying the original array
  $newData = $data;

  foreach ($newData as &$item) {
    $item['processed'] = true;
  }

  return $newData;
}

$data = [{
  'id' => 1,
  'name' => 'Item 1'
}];

$processedData = processData($data);

// Correct behavior: original $data array remains unchanged
print_r($data); // Output does not show 'processed' key
print_r($processedData); //Output shows 'processed' key
```