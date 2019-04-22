# Serialize library for ITEA homework

Simple Factory pattern example for responsive serializing object
to the needed format

## Installing
<code>    composer require dozer111/serializer <code>

## Basic usage
<code>
    
    use dozer111\serializer\SerializeFactory;
    use dozer111\serializer\serializeItems\JsonSerialize;
    
    // .... your code

    // 1 get some your object
    $myTestObject = new SomeObject();
    
    // 2 do SerializeFactory::serializeObject
    $serializeObject = new SerializeFactory(new Json());
    $result = $serializeObject->serializeObject($myTestObject);
<code>

## Basic output serialize types
1.  Json
2.  Yaml

