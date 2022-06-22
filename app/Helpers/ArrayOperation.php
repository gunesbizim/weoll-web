<?php

function arrayToObject($arr)
{
    return
        json_decode(json_encode($arr));
}
