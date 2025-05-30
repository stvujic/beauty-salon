<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            ['name' => 'Detox Bliss', 'description' => 'Pomaže telu da se oslobodi toksina.', 'price' => 3000],
            ['name' => 'Silhouette Touch', 'description' => 'Oblikovanje tela i limfna drenaža.', 'price' => 3500],
            ['name' => 'Glow Ritual', 'description' => 'Piling, masaža i dubinska nega kože.', 'price' => 3800],
            ['name' => 'Harmony Escape', 'description' => 'Relaksacija tela i uma.', 'price' => 3200],
            ['name' => 'Premium Sculpt', 'description' => 'Zatezanje i učvršćivanje zona.', 'price' => 4000],
            ['name' => 'Royal Experience', 'description' => 'Luksuzan tretman za regeneraciju.', 'price' => 4500],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
