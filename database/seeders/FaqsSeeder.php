<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What types of construction services does EM Building Contractors offer?',
                'answer' => 'EM Building Contractors, LLC offers a comprehensive range of construction services including wood framing, metal framing and drywall, gypsum concrete underlayment, roofing (commercial and residential), building maintenance, concrete work, and solar energy solutions. We serve both residential and commercial clients across Texas.',
            ],
            [
                'question' => 'Do you handle both residential and commercial projects?',
                'answer' => 'Yes, we handle both residential and commercial construction projects. Our team is experienced in single-family homes, multi-family housing, office buildings, retail spaces, industrial facilities, and more. Whether it is a small renovation or a large-scale commercial build, we have the expertise to deliver quality results.',
            ],
            [
                'question' => 'What areas do you serve?',
                'answer' => 'EM Building Contractors, LLC primarily serves the Garland, Texas area and the greater Dallas-Fort Worth metroplex. However, we take on projects throughout Texas depending on scope and requirements. Contact us to discuss your project location and we will let you know if we can help.',
            ],
            [
                'question' => 'How do I get a quote for my construction project?',
                'answer' => 'Getting a quote is easy. You can contact us by phone at (469) 209-0536, email us at embuildersservices@gmail.com, or fill out the contact form on our website. Provide as much detail as possible about your project — including scope, location, timeline, and any blueprints or plans — and our team will get back to you with a detailed estimate.',
            ],
            [
                'question' => 'Are you licensed and insured?',
                'answer' => 'Yes, EM Building Contractors, LLC is fully licensed and insured. We carry general liability insurance, workers compensation coverage, and all required state and local licenses. We are happy to provide certificates of insurance upon request for any project.',
            ],
            [
                'question' => 'What is the typical timeline for a construction project?',
                'answer' => 'Project timelines vary depending on the scope, complexity, and type of work. A typical residential framing project might take one to three weeks, while a full commercial build-out could take several months. During the initial consultation, we provide a realistic timeline based on your specific project requirements and work to meet or beat that schedule.',
            ],
            [
                'question' => 'What is gypsum concrete and why is it used?',
                'answer' => 'Gypsum concrete is a lightweight, self-leveling underlayment used primarily in multi-story construction. It provides excellent fire ratings for floor-ceiling assemblies, superior sound insulation between floors, and creates a perfectly level surface for finished flooring. It is required by building codes in most multi-family and commercial projects for fire and sound attenuation.',
            ],
            [
                'question' => 'Do you offer building maintenance services after construction?',
                'answer' => 'Yes, we offer comprehensive building maintenance programs including preventive maintenance, general repairs, exterior upkeep, HVAC support, and emergency response services. We create customized maintenance plans based on your property type, age, and specific needs to keep your building in optimal condition year-round.',
            ],
            [
                'question' => 'Can you help with solar panel installation on my commercial building?',
                'answer' => 'Absolutely. We provide end-to-end commercial solar solutions including energy assessment, system design, permitting, installation, and utility interconnection. As both a roofing contractor and solar installer, we can also assess and repair your roof before installation, ensuring your roof and solar system work together for maximum performance and longevity.',
            ],
            [
                'question' => 'What makes EM Building Contractors different from other construction companies?',
                'answer' => 'What sets us apart is our combination of diverse expertise, quality craftsmanship, and commitment to client satisfaction. We handle multiple trades in-house — framing, drywall, concrete, roofing, and solar — which means better coordination, fewer delays, and consistent quality across your entire project. Our experienced crews, clean job sites, and transparent communication ensure a smooth construction experience from start to finish.',
            ],
        ];

        foreach ($faqs as $faq) {
            $faq['active_flag'] = 1;
            $faq['created_at'] = now();
            $faq['updated_at'] = now();
            DB::table('faqs')->insert($faq);
        }
    }
}
