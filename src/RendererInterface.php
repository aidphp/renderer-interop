<?php

declare(strict_types=1);

namespace Interop\Template;

interface RendererInterface
{
    function render(string $template, array $parameters = []): string;
}