<?php

declare(strict_types=1);

namespace MXRVX\CodeStyle;

interface RulesInterface
{
    /**
     * @return array<non-empty-string, array<non-empty-string, mixed>|bool>
     */
    public function getRules(bool $risky): array;
}
