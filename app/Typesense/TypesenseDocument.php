<?php

namespace App\Typesense;

interface TypesenseDocument
{
    public function collectionName(): string;
    public function fields(): array;
    public function defaultSortingField(): string;
}