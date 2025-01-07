```php
function processData(array $data): array {
  // Some code to process the data
  foreach ($data as &$item) {
    $item['processed'] = true; 
  }
  return $data;
}

$data = [{
  'id' => 1,
  'name' => 'Item 1'
}];

$processedData = processData($data);

// Unexpected result: $data is also modified
print_r($data); // Output shows 'processed' key added to the original $data array
```