<?php
namespace dozer111\serializer\tests;



use dozer111\serialize\SerializeFactory;
use dozer111\serialize\serializeItems\JsonSerialize;

class Example1
{
    public static function example1()
    {
        $obj = new \Exception('some test text');

        $factory = new SerializeFactory(new JsonSerialize());
        echo $factory->serializeObject();
    }
}















