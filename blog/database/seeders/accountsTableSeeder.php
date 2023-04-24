<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class accountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //specify the connection to use
        DB::connection('mysql')->table('accounts')->insert
        (
            [
                ['name'=> 'Youssaou','lastname'=> 'Ismaila','email'=> 'boboy.youssaou@2026.ucac-icam.com','location'=> 'douala','role'=> 'student'],
                ['name'=> 'Sonpoho','lastname'=> 'Michelle','email'=> 'michelle.sonpoho@2026.ucac-icam.com','location'=> 'douala','role'=> 'student'],
                ['name'=> 'Kenmogne','lastname'=> 'Yoann','email'=> 'andre.kenmogne@2026.ucac-icam.com','location'=> 'douala','role'=> 'student'],
                ['name'=> 'Tawamba','lastname'=> 'Lorince','email'=> 'lorince.tawamba@ucac-icam.com','location'=> 'douala','role'=> 'staff'],
                ['name'=> 'Tseffo','lastname'=> 'Ghislain','email'=> 'ghislain.tseffo@ucac-icam.com','location'=> 'douala','role'=> 'staff'],
                ['name'=> 'Abena','lastname'=> 'Lise','email'=> 'lise.abena@2025.icam.fr','location'=> 'douala','role'=> 'bde'],
                ['name'=> 'Tiomela','lastname'=> 'Irina','email'=> 'oriane.tiomela@2027.icam.com','location'=> 'douala','role'=> 'bde'],
                ['name'=> 'Syapze','lastname'=> 'Yves','email'=> 'yves.syapze@2025.ucac-icam.com','location'=> 'douala','role'=> 'bde'],
                ['name'=> 'Youngui','lastname'=> 'Victoire','email'=> 'victoire.youngui@2026.ucac-icam.com','location'=> 'douala','role'=> 'student'],
                ['name'=> 'Padia','lastname'=> 'Esperance','email'=> 'esperance.padia@ucac-icam.com','location'=> 'douala','role'=> 'staff'],
                ['name'=> 'Dohou-ngho','lastname'=> 'xavier','email'=> 'xavier.dohou-ngho@2024.ucac-icam.com','location'=> 'douala','role'=> 'bde'],
                ['name'=> 'Ngako','lastname'=> 'Franck','email'=> 'franck.ngako@ucac-icam.com','location'=> 'douala','role'=> 'staff'],
                ['name'=> 'Dumont','lastname'=> 'Jean','email'=> 'jean.dumont@ucac-icam.com','location'=> 'france','role'=> 'staff'],
                ['name'=> 'Dubois','lastname'=> 'pierre','email'=> 'pierre.dubois@ucac-icam.com','location'=> 'kinshasa','role'=> 'student'],
                ['name'=> 'Djiojip','lastname'=> 'Rowane','email'=> 'claude.djiojip@2026.ucac-icam.com','location'=> 'douala','role'=> 'student'],
                ['name'=> 'Matondo','lastname'=> 'Marco','email'=> 'marco.matondo@2026.ucac-icam.com','location'=> 'kinshasa','role'=> 'student'],
                ['name'=> 'Mabiald','lastname'=> 'Gaude','email'=> 'gaude.mabiald@2023.ucac-icam.com','location'=> 'kinshasa','role'=> 'bde'],
                ['name'=> 'Isakai','lastname'=> 'Paule','email'=> 'paule.isakai@ucac-icam.com','location'=> 'kinshasa','role'=> 'staff'],
                ['name'=> 'Sama','lastname'=> 'Navy','email'=> 'navy.sama@ucac-icam.com','location'=> 'kinshasa','role'=> 'student'],
            ]
        );
    }
}
