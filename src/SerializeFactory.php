<?php
namespace dozer111\serialize;








class SerializeFactory
{
    private $serializer;

    public function __construct(SerializeInterface $serializer)
    {

        $this->serializer = $serializer;
    }

    
    public function serializeObject():string
    {
        
        return $this->serializer->serialize();
    }


}






