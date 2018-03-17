<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/14/2018
 * Time: 11:32 AM
 */

class Hash{

   // Hash::create($algo, $data, $salt);

    public static function  create($algo, $data, $salt){
        $context = hash_init($algo, HASH_HMAC, $salt);


        hash_update($context, $data);

        return hash_final($context);
    }
}