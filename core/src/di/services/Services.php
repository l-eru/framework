<?php
namespace L\Di\Services;

abstract class Services implements ServiceInterface
{
    public function isShared(): bool
    {
        return true;
    }
}