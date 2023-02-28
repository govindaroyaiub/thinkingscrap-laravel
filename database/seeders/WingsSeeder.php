<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wing;

class WingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Digital Marketing',
                'description' => 'Digital marketing is any form of marketing that involves electronic devices. It can be done online and offline, and in fact, both kinds are important for a well-rounded Digital Marketing Strategy. We provide 360° Digital Marketing support with proper research, to ensure higher ROI and Conversion Rate.'
            ],
            [
                'name' => 'Media Buying',
                'description' => 'Professional media buyers of our team ensure creative and accurately targeted brand ads, to secure maximum visibility of brands over different media platforms.'
            ],
            [
                'name' => 'Digital Content Development',
                'description' => 'Content Development makes brands more visible to potential consumers who search for relevant products online. Our content developers know exact Keywords and SEO methods needed for a brand.'
            ],
            [
                'name' => 'Video Commercial',
                'description' => 'Experienced in-house production team to showcase your brand creatively, to increase Sales Conversion and Lead Generation.'
            ],
            [
                'name' => 'SEO',
                'description' => 'Search engine optimization (SEO) is the process of improving the quality and quantity of website traffic to a website or a web page from search engines. SEO targets unpaid rather than direct traffic or paid traffic.'
            ],
            [
                'name' => 'Product Photography',
                'description' => 'Our Professional photography service enhances brand personality, trust and perceived value.'
            ],
            [
                'name' => 'Event Management',
                'description' => 'With efficient use of budget with creative decoration, our professional event planner team makes personal or corporate events a success.'
            ],
            [
                'name' => 'Web Solution',
                'description' => 'We provide Web Solution through our expert developer team to provide more Lead, Credibility and better customer service to the brands.'
            ],
            [
                'name' => 'PR Solution',
                'description' => "Accurate PR activities increase brand's publicity and credibility. We provide well crafted PR solutions to support brands with maximum exposure across different media."
            ]
        ];

        foreach($data as $row){
            Wing::create($row);
        }
    }
}
