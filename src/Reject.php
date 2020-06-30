<?php

namespace CodeWars;

function reject($array, $predicate)
{
    return array_values(array_diff($array, array_filter($array, $predicate)));
}
