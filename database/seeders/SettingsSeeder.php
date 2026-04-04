<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'company_name' => 'EM Building Contractors, LLC',
            'address' => '1919 S. Shiloh Road, Suite 230 Garland, Texas 75042',
            'office_phone' => '(469) 209-0536',
            'cell_phone' => '(214) 783-4924',
            'email' => 'embuildersservices@gmail.com',
            'working_hours' => 'Mon - Fri: 09am - 07pm',
            'facebook' => 'https://www.facebook.com/Jabesconstructors/',
            'instagram' => 'https://www.instagram.com/jabesconstructors/',
            'linkedin' => 'https://www.linkedin.com/company/jabes-constuctors/',
            'youtube' => 'https://www.youtube.com/@JabesConstructors',
            'twitter' => '',
            'whatsapp' => '',
            'footer_text' => 'EM Building Contractors, LLC: Building excellence with integrity, innovation, and commitment to quality craftsmanship.',
            'copyright' => 'EM Building Contractors, LLC. All Rights Reserved.',
        ];

        foreach ($settings as $key => $value) {
            DB::table('settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value, 'updated_at' => now()]
            );
        }
    }
}
