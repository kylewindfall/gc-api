<?php

function ifcheck($value)
{

    if ($value == 1) {
        return '<p class="center-text"><i class="icon-check icons yes"></i></p>';
    } else {
        return '<p class="center-text"><i class="icon-close icons no"></i></p>';
    }
}
