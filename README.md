# Serialize library for ITEA homework

Simple Factory pattern example for responsive serializing object
to the needed format

## Installing
<code>    composer require dozer111/serializer <code>

## Basic usage

```

use dozer111\serializer\SerializeFactory;
use dozer111\serializer\serializeItems\JsonSerialize;
    
// .... your code

// 1 get some your object
$myTestObject = new SomeObject();
    
// 2 do SerializeFactory::serializeObject
$serializeObject = new SerializeFactory(new Json());
$result = $serializeObject->serializeObject($myTestObject);

```

## Basic output serialize types
+ Json
+ Yaml

