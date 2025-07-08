<?php

namespace App\Models\MockData;

// use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;

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

    /**
     * Return the mock list as a Laravel Collection.
     */
    public static function getMockListCollection(): EloquentCollection
    {
        $objects = array_map(function ($item) {
            return (object) $item;
        }, self::getMockList());
        return new EloquentCollection($objects);
    }

    /**
     * Return the mock list as an Eloquent Collection of generic models.
     */
    public static function getMockListEloquentCollection(): EloquentCollection
    {
        $models = array_map(function ($item) {
            $model = new class($item) extends Model {
                protected $fillable = ['id', 'title', 'detail', 'salary'];
                public function __construct(array $attributes = [])
                {
                    parent::__construct($attributes);
                    $this->setRawAttributes($attributes, true);
                }
            };
            return $model;
        }, self::getMockList());

        return new EloquentCollection($models);
    }
}
