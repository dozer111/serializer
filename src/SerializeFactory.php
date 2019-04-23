<?php
namespace dozer111\serializer;








class SerializeFactory
{
    private $serializer;
    private $inputObject;

    public function __construct(SerializeInterface $serializer)
    {

        $this->serializer = $serializer;
    }

    
    public function serializeObject($object):string
    {

        return $this->serializer->serialize($object);
    }



    protected function validateObject()
    {



    }




}






