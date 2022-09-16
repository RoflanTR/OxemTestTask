<?php
abstract class Animals
{
    private $number;
    function AddAnimals($number,&$arr,$col)
    {
        for ($i=1; $i <= $col; $i++) { 
            array_push($arr,['name' => $number]);
            $number++;
        }
        return $number;
    }
    abstract function Gather($arr);
    
}

class Chicken extends Animals
{
    function Gather($arr)
    {
        $generalQuantity=0;
        for ($i=0; $i <= 7; $i++) { 
            for ($i=0; $i <=count($arr) ; $i++) { 
                $generalQuantity+= rand(0,1);
            }  
        }
        return $generalQuantity;
    }
}
class Cow extends Animals
{
    function Gather($arr)
    {
        $generalQuantity=0;
        for ($i=0; $i <= 7; $i++) { 
            for ($i=0; $i <=count($arr) ; $i++) { 
                $generalQuantity+= rand(8,12);
            }  
        }
        return $generalQuantity;
    }
}
?>