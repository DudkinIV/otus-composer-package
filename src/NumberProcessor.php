<?php

namespace DudkinId\OtusComposerPackage;

class NumberProcessor
{
    public function max(int $a, int $b): int
    {
        return max($a, $b);
    }
}