<?php
namespace L\Di\Services;

interface ServiceInterface
{
    public function boot();

    /**
     * @return bool
     */
    public function isShared(): bool;
}