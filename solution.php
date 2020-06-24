<?php

/**
 * @param int $X
 * @param int $Y
 * @param int $D
 * @return int
 */

function solution($X, $Y, $D):int
{
    return intval(ceil(($Y-$X)/$D));
}
