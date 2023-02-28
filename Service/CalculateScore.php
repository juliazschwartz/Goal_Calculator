<?php

namespace CompanyX\Service;

use CompanyX\Model\Scorable;
//Calculate the score of the salesman, to check if he achieve the goal set by the company, and the award/bonus he will have
class CalculateScore
{
    public function getScore(Scorable $client)
    {
        return $client->getScore();
    }
}
