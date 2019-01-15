<?php

    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {

        $pass_order = Array();
        $passWord = '';

        for ($i = 0; $i < $upper; $i++) {
            $pass_order[] = chr(rand(65, 90));
        }

        for ($i = 0; $i < $lower; $i++) {
            $pass_order[] = chr(rand(97, 122));
        }

        for ($i = 0; $i < $numeric; $i++) {
            $pass_order[] = chr(rand(48, 57));
        }

        for ($i = 0; $i < $other; $i++) {
            $pass_order[] = chr(rand(33, 47));
        }

        shuffle($pass_order);

        foreach ($pass_order as $char) {
            $passWord .= $char;
        }

        return $passWord;

    }

    echo "\n"."Generated Password : ".rand_Pass(),"\n";

?>