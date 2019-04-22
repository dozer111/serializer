<?php
namespace dozer111\serializer\serializeItems;

use dozer111\serializer\SerializeInterface;


class YamlSerialize implements SerializeInterface
{
    public function serialize( $object): string
    {
        if(!is_object($object))
            throw new \InvalidArgumentException("Argument must be an object");

        return yaml_emit($object);
    }
}















