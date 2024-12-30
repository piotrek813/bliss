<?php

function className(...$params) {
    $count = count($params);

    if ($count == 1) {
        $c = "";

        foreach($params[0] as $class=>$condition) {
            if ($condition) $c = $c. " " . $class;
        }

        return $c;
    }

    if ($count == 2 && $params[1]) {
        return $params[0];
    }

    if ($params[2]) return $params[0];
    if ($params[2]) return $params[1];
}

