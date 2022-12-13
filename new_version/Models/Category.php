<?php

/**
 * @param string $name
 * Creating Category Class (composition)
 */
class Category
{
    function __construct(public string $name)
    {
        $this->name = $name;
    }
}
