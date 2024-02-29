<?php

namespace Database\Seeders;

use App\Models\Docteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Docteur::create([
           "name" => "Dr CISSE",
           "profession" => "Dentist",
           "location" => "Thies | Aiglon",
           "imageUrl" => "https://cdn.pixabay.com/photo/2023/12/15/18/40/ai-generated-8451277_640.png",
           "days" => json_encode(["20-01-2023", "22-01-2023", "24-01-2023", "26-01-2023"]),
            "hours" => json_encode(["10:00", "10:30", "11:00", "11:30", "12:00"]),
            "heures_travail" => json_encode(["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"]),
            "jours_travail" => json_encode(["08h00-10h00", "08h00-17h00", "08h00-12h00", "08h00-18h00", "08h00-13h00"]),
        ]);

        Docteur::create([
            "name" => "Dr Diagne",
            "profession" => "Dentist",
            "location" => "Thies | Grand Thies",
            "imageUrl" => "https://cdn.pixabay.com/photo/2016/02/10/13/03/dentist-1191671_640.jpg",
            "days" => json_encode(["20-01-2023", "22-01-2023", "24-01-2023", "26-01-2023"]),
            "hours" => json_encode(["10:00", "10:30", "11:00", "11:30", "12:00"]),
            "heures_travail" => json_encode(["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"]),
            "jours_travail" => json_encode(["08h00-10h00", "08h00-17h00", "08h00-12h00", "08h00-18h00", "08h00-13h00"]),
         ]);

         Docteur::create([
            "name" => "Dr Diop",
            "profession" => "Ophtalmologue",
            "location" => "Thies | Grand Thies",
            "imageUrl" => "https://cdn.pixabay.com/photo/2020/11/21/20/04/hospital-5765027_640.jpg",
            "days" => json_encode([20-01-2023, 22-01-2023, 24-01-2023, 26-01-2023]),
            "hours" => json_encode(["10:00", "10:30", "11:00", "11:30", "12:00"]),
            "heures_travail" => json_encode(["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"]),
            "jours_travail" => json_encode(["08h00-10h00", "08h00-17h00", "08h00-12h00", "08h00-18h00", "08h00-13h00"]),
 
         ]);

         Docteur::create([
            "name" => "Dr Diop",
            "profession" => "Ophtalmologue",
            "location" => "Thies | Keur Mame Elhadji",
            "imageUrl" => "https://cdn.pixabay.com/photo/2020/06/20/15/30/woman-doctor-5321351_640.jpg",
            "days" => json_encode(["20-01-2023", "22-01-2023", "24-01-2023", "26-01-2023"]),
            "hours" => json_encode(["10:00", "10:30", "11:00", "11:30", "12:00"]),
            "heures_travail" => json_encode(["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"]),
            "jours_travail" => json_encode(["08h00-10h00", "08h00-17h00", "08h00-12h00", "08h00-18h00", "08h00-13h00"]),
 
         ]);

         Docteur::create([
            "name" => "Dr Niang",
            "profession" => "Cardiologue",
            "location" => "Dakar | Sebikotane",
            "imageUrl" => "https://cdn.pixabay.com/photo/2017/09/06/20/36/doctor-2722941_640.jpg",
            "days" => json_encode(["20-01-2023", "22-01-2023", "24-01-2023", "26-01-2023"]),
            "hours" => json_encode(["10:00", "10:30", "11:00", "11:30", "12:00"]),
            "heures_travail" => json_encode(["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"]),
            "jours_travail" => json_encode(["08h00-10h00", "08h00-17h00", "08h00-12h00", "08h00-18h00", "08h00-13h00"]),

         ]);

         Docteur::create([
            "name" => "Dr Yade",
            "profession" => "Cardiologue",
            "location" => "Thies | Bayal",
            "imageUrl" => "https://cdn.pixabay.com/photo/2020/06/16/17/53/people-5306730_640.jpg",
            "days" => json_encode(["20-01-2023", "22-01-2023", "24-01-2023", "26-01-2023"]),
            "hours" => json_encode(["10:00", "10:30", "11:00", "11:30", "12:00"]),
            "heures_travail" => json_encode(["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"]),
            "jours_travail" => json_encode(["08h00-10h00", "08h00-17h00", "08h00-12h00", "08h00-18h00", "08h00-13h00"]),
         ]);

    }
}
