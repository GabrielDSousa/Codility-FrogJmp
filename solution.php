<?php

/**
 * @param int $X
 * @param int $Y
 * @param int $D
 */

function solution($X, $Y, $D):int
{
    return intval(ceil(($Y-$X)/$D));
}
