<?php

namespace Modules\Shared\Exceptions;

use Exception;

class InsufficientStockException extends Exception
{
    public function __construct(
        public string $productName,
        public int $available,
        public int $requested
    ) {
        parent::__construct(
            "Stok {$productName} tidak mencukupi. Tersedia: {$available}, diminta: {$requested}"
        );
    }
}
