<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => 10000
            ],
            [
                'id' => 2,
                'title' => 'Teacher',
                'salary' => 40000
            ],
            [
                'id' => 3,
                'title' => 'Director',
                'salary' => 200000
            ]
        ];
    }

    public static function find($id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        
        return $job;
    }
}