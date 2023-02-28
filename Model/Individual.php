<?php

namespace CompanyX\Model;

use CompanyX\Model\Scorable;
use CompanyX\Model\Convertable;
//The client can be a unique individual that it's converted.

class Individual extends  Client implements Scorable, Convertable
{
    public $type;

    public function __construct(string $name, string $type)
    {
        parent::__construct($name);
        $this->type = $type;
    }

    public function getInfo(): string
    {
        return 'http://companyX.com/clients' . http_build_query(['name' => $this->name]);
    }


    public function getScore(): int
    {
        return $this->getBudget() * 2;
    }
}
