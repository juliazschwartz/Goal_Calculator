<?php

namespace CompanyX\Service;

use CompanyX\Model\Model\Convertable;

class Seller
{
    public function convert(Convertable $client): void
    {
        $client->convert();
    }
}
