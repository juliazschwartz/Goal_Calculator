<?php

namespace CompanyX\Model;

use CompanyX\Model\Scorable;
use CompanyX\Model\Convertable;

//The client can be a corporate that offers the service to its clients, so, converting a corporate, several clients will be converted .

class Corporation implements Scorable, Convertable
{
    private $name;
    private $clients;
    private $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->clients = [];
        $this->feedbacks = [];
    }

    public function getCorporateFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addClient(Client $client)
    {
        if ($client->budget() < 2000.00) {
            throw new \DomainException('Budget under minimum required');
        }

        $this->clients[] = $client;
    }

    /** @return Client[] */
    public function getClients(): array
    {
        return $this->clients;
    }


    public function getScore(): int
    {
        return 10;
    }


    public function convert(): void
    {
        foreach ($this->getClients() as $client) {
            $client->convert();
        }
    }
}
