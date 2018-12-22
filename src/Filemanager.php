<?php

// add namespace
namespace src;

class Filemanager{
    public function saveOrder()
    {
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE); //convert JSON into array

        var_dump($input);

        $data = "data:\t".$input['name']."\t".$input['email']."\n";
        file_put_contents( 'src/database/orders.dat' , $data, FILE_APPEND );

    }

    public function getOrders()
    {

    }
}
    
?>