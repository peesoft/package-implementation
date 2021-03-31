<?php

namespace Testsoft\PackageImplementation;


use Testsoft\PackageInterface\DoerInterface;

class Doer implements DoerInterface
{
    public function doit(): void
    {
        // does not matter
    }
}