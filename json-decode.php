<?php

    function w3rfunction($value, $key) {
        echo "$key : $value"."<br>";
    }

    $json = '{
        "Title": "The Cuckoos Calling",
        "Author": "Robert Galbraith",
        "Details": {
            "Publisher": "Little Brown"
        }
    }';

    $jl = json_decode($json, true);

    array_walk_recursive($jl, "w3rfunction");

?>