<?php

namespace CompanyX\Model;
//Interface implemented by Entities that, when converted by the employees, give points to the employee achieve his goal;
//Each one will give a certain pontuation to the employee, but the Company Entitie will give more points, because each client of this company will become a converted client
{
    public function getScore(): int;
}