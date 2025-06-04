<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = [7, 8, 9];

        $contents = [
            'Odlična usluga! Preporučujem svima.',
            'Prijatna atmosfera i profesionalan tretman.',
            'Oduševljena sam rezultatima, dolazim opet!',
        ];

        foreach ($userIds as $index => $userId) {
            Comment::create([
                'user_id' => $userId,
                'content' => $contents[$index],
                'is_approved' => true,
            ]);
        }
    }
}
