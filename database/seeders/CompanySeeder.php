<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Thinking Scrap',
            'meta_description' => 'Thinking Scrap! Visualize your brand identity.',
            'logo_path' => 'logo.png',
            'who_we_are' => 'The Digital world comes with many challenges and obstacles that are not easily tackled by just any mainstream organization, it takes innovative pioneers who combine creativity and professionalism with a hint of perseverance to come up with the most convenient Digital solutions. This is exactly what we “Thinking Scrap” provide to seekers of top-notch quality services and individuals or businesses who are eager for super convenient and efficient solutions. We analyze what a brand actually needs to stand out from the crowd. In a marketplace too noisy, brands need to be honest first than being loud.',
            'what_we_do' => 'We as a team provide our 360-degree complete Digital solutions universally, we hope to reach out to many corners on the globe and create firm bonds with our customers in order to continue providing our outstanding services. We provide creative, strategic, and technical development of marketing products and services. We work together with our clients to build a better Brand with exciting marketing contents and value to their target customers. Our understanding of marketing products empowers us to bring a level of expertise to your company like no one else. We know how to build a Brand that can scale to your business needs on point.',
            'phone' => '+880-1767696244',
            'address' => '8/15 Block #A, Lalmatia, Dhaka - 1205',
            'email' => 'info@thinkingscrap.com'
        ];

        Company::create($data);
    }
}
