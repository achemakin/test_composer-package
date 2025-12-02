<?php

declare(strict_types=1);

namespace Achemakin\TestComposerPackage;

class StringProcessor
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }
}
