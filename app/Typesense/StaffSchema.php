<?php

namespace App\Typesense;
use App\Typesense\TypesenseDocument;


class StaffSchema implements TypesenseDocument
{
    public function collectionName(): string
    {
        return 'staff_index';
    }

    public function fields(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => 'string',
                'facet' => false
            ],
            'name' => [
                'name' => 'name',
                'type' => 'string',
                'facet' => true
            ],
            'position' => [
                'name' => 'position',
                'type' => 'string',
                'facet' => true
            ],
            'email' => [
                'name' => 'email',
                'type' => 'string',
                'facet' => false,
                'optional' => true
            ],
            'image' => [
                'name' => 'image',
                'type' => 'string',
                'facet' => false,
                'optional' => true
            ],
            'cv_link' => [
                'name' => 'cv_link',
                'type' => 'string',
                'facet' => false,
                'optional' => true
            ],
            'created_at' => [
                'name' => 'created_at',
                'type' => 'int64',
                'facet' => false,
                'optional' => true
            ]
        ];
    }

    public function defaultSortingField(): string
    {
        return 'created_at:desc';
    }
}