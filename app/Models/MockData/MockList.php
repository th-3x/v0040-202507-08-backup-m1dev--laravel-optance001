<?php

namespace App\Models\MockData;

class MockList
{
    public static function getMockList(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'John Doe',
                'detail' => 'Sample detail text here',
                'salary' => '$USD 1000',
            ],
            [
                'id' => 2,
                'title' => 'Jane Smith',
                'detail' => 'Another sample detail text here',
                'salary' => '$USD 2000',
            ],
            [
                'id' => 3,
                'title' => 'Alice Johnson',
                'detail' => 'More sample detail text here',
                'salary' => '$USD 3000',
            ],
            [
                'id' => 4,
                'title' => 'Bob Brown',
                'detail' => 'Yet another sample detail text here',
                'salary' => '$USD 4000',
            ],
            [
                'id' => 5,
                'title' => 'Charlie Black',
                'detail' => 'Sample detail text here',
                'salary' => '$USD 5000',
            ],
            [
                'id' => 6,
                'title' => 'Diana White',
                'detail' => 'Another sample detail text here',
                'salary' => '$USD 6000',
            ],
            [
                'id' => 7,
                'title' => 'Ethan Green',
                'detail' => 'More sample detail text here',
                'salary' => '$USD 7000',
            ],
            [
                'id' => 8,
                'title' => 'Fiona Blue',
                'detail' => 'Yet another sample detail text here',
                'salary' => '$USD 8000',
            ],
            [
                'id' => 9,
                'title' => 'George Yellow',
                'detail' => 'Sample detail text here',
                'salary' => '$USD 9000',
            ],
            [
                'id' => 10,
                'title' => 'Hannah Purple',
                'detail' => 'Another sample detail text here',
                'salary' => '$USD 10000',
            ],
        ];
    }

    public static function getMockListWithId(int $id): ?array
    {
        $mockList = collect(self::getMockList());
        return $mockList->firstWhere('id', $id) ?: null;
    }
}
