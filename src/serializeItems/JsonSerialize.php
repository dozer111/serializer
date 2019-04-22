<?php
namespace dozer111\serialize\serializeItems;

use dozer111\serialize\SerializeInterface;


class JsonSerialize implements SerializeInterface
{
    public function serialize(object $object): string
    {
        return json_encode($object);
    }
}










