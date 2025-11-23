<?php
namespace App\Models;

use Illuminate\Support\Arr;
class Job
{
    public static function all(): array
    {
        $jobs = [
            [
                'id' => 1,
                'title' => 'Frontend Developer',
                'company' => 'City Group',
                'salary' => '2800',
            ],
            [
                'id' => 2,
                'title' => 'Go-Lang Developer',
                'company' => 'Yoma Group',
                'salary' => '3200',
            ],
            [
                'id' => 3,
                'title' => 'Mobile Developer',
                'company' => 'City Group',
                'salary' => '3000',
            ],
            [
                'id' => 4,
                'title' => 'Solution Architect',
                'company' => 'Country Group',
                'salary' => '4500',
            ],
        ];
        return $jobs;
    }

    public static function find ($id) : array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}