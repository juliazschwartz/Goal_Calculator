<?php

namespace CompanyX\Model;
//Feedback Given by the Company
class FeedBack
{
    private $rating;
    private $notes;

    public function __construct(int $rating, ?string $notes)
    {
        if ($rating < 9 && empty($notes)) {
            throw new \DomainException('notes mandatory');
        }

        $this->notes = $notes;
        $this->rating = $rating;
    }


    public function getNotes(): ?string
    {
        return $this->notes;
    }


    public function getRating(): int
    {
        return $this->rating;
    }
}