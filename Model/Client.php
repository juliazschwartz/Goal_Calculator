<?php

namespace CompanyX\Model;
class Client
{
    /** @var bool */
    protected $converted = false;
    /** @var string */
    protected $name;
    /** @var \int */
    protected $budget;

    public function __construct(string $name, int $budget)
    {
        $this->name = $name;
        $this->converted = false;
        $this->budget = $budget;
    }

    public function convert(): void
    {
        $this->converted = true;
    }

    public function getBudget(): int
    {
        return $this->budget;
    }

    public function getInfo(): string
    {
        return 'http://companyX.com/clients' . http_build_query(['name' => $this->name]);
    }
}
