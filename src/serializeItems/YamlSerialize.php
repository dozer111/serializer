<?php
namespace dozer111\serialize\serializeItems;

use dozer111\serialize\SerializeInterface;


class YamlSerialize implements SerializeInterface
{
    public function serialize(object $object): string
    {
        return yaml_emit($object);
    }
}















