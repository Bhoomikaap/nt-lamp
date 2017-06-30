<?php

use Illuminate\Database\Seeder;
use App\Industry;

class IndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('industry')->truncate();

        Industry::insert([
        	['industry' => 'Accounting',
        	'slug' => 'accounting'],
        	['industry' => 'Advertising',
        	'slug' => 'advertising'],
        	['industry' => 'Agriculture',
        	'slug' => 'agriculture'],
        	['industry' => 'Animation',
        	'slug' => 'animation'],
        	['industry' => 'Architecture',
        	'slug' => 'architecture'],
        	['industry' => 'Automobile',
        	'slug' => 'automobile'],
        	['industry' => 'Aviation',
        	'slug' => 'aviation'],
        	['industry' => 'BPO',
        	'slug' => 'bpo'],
        	['industry' => 'Bank',
        	'slug' => 'bank'],
        	['industry' => 'Brewery',
        	'slug' => 'brewery'],
        	['industry' => 'Sanitary',
        	'slug' => 'sanitary'],
        	['industry' => 'Chemical',
        	'slug' => 'chemical'],
        	['industry' => 'Engineering',
        	'slug' => 'engineering'],
        	['industry' => 'Consumer Durables',
        	'slug' => 'consumer-durables'],
        	['industry' => 'Courier',
        	'slug' => 'courier'],
        	['industry' => 'Defence',
        	'slug' => 'defence'],
        	['industry' => 'Teacher',
        	'slug' => 'teacher'],
        	['industry' => 'Electrical',
        	'slug' => 'electrical'],
        	['industry' => 'Export Import',
        	'slug' => 'export-import'],
        	['industry' => 'FMCG',
        	'slug' => 'fmcg'],
        	['industry' => 'Facility Management',
        	'slug' => 'facility-management'],
        	['industry' => 'Fertilizers',
        	'slug' => 'fertilizers'],
        	['industry' => 'Food Processing',
        	'slug' => 'food-processing'],
        	['industry' => 'Fresher',
        	'slug' => 'fresher'],
        	['industry' => 'Gems Jewellery',
        	'slug' => 'gems-jewellery'],
        	['industry' => 'Glass',
        	'slug' => 'glass'],
        	['industry' => 'Air Conditioning',
        	'slug' => 'air-conditioning'],
        	['industry' => 'Airline',
        	'slug' => 'airline'],
        	['industry' => 'Networking',
        	'slug' => 'networking'],
        	['industry' => 'IT',
        	'slug' => 'it'],
        	['industry' => 'Industrial',
        	'slug' => 'industrial'],
        	['industry' => 'Insurance',
        	'slug' => 'insurance'],
        	['industry' => 'KPO',
        	'slug' => 'kpo'],
        	['industry' => 'Legal',
        	'slug' => 'legal'],
        	['industry' => 'Media',
        	'slug' => 'media'],
        	['industry' => 'Dotcom',
        	'slug' => 'dotcom'],
        	['industry' => 'Entertainment',
        	'slug' => 'entertainment'],
        	['industry' => 'Medical',
        	'slug' => 'medical'],
        	['industry' => 'Mining',
        	'slug' => 'mining'],
        	['industry' => 'NGO',
        	'slug' => 'ngo'],
        	['industry' => 'Automation',
        	'slug' => 'automation'],
        	['industry' => 'Oil and Gas',
        	'slug' => 'oil-and-gas'],
        	['industry' => 'Paper',
        	'slug' => 'paper'],
        	['industry' => 'Pharma',
        	'slug' => 'pharma'],
        	['industry' => 'Printing',
        	'slug' => 'printing'],
        	['industry' => 'Publishing',
        	'slug' => 'publishing'],
        	['industry' => 'Real Estate',
        	'slug' => 'real-estate'],
        	['industry' => 'Recruitment',
        	'slug' => 'recruitment'],
        	['industry' => 'Retail',
        	'slug' => 'retail'],
        	['industry' => 'Security',
        	'slug' => 'security'],
        	['industry' => 'Electronics',
        	'slug' => 'electronics'],
        	['industry' => 'Shipping',
        	'slug' => 'shipping'],
        	['industry' => 'Steel',
        	'slug' => 'steel'],
        	['industry' => 'Consultant',
        	'slug' => 'consultant'],
        	['industry' => 'Telecom',
        	'slug' => 'telecom'],
        	['industry' => 'Textiles',
        	'slug' => 'textiles'],
        	['industry' => 'Tyres',
        	'slug' => 'tyres'],
        	['industry' => 'Water Treatment',
        	'slug' => 'water-treatment'],
        	['industry' => 'Fitness Trainer',
        	'slug' => 'fitness-trainer'],
        	['industry' => 'Ecommerce',
        	'slug' => 'ecommerce'],
        	['industry' => 'Internet',
        	'slug' => 'internet'],
        	['industry' => 'Other',
        	'slug' => 'other'],
        	]);
    }
}
