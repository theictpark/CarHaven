<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cars = [
            [
                'name' => 'Model S',
                'brand' => 'Tesla',
                'model' => 'S',
                'year' => 2022,
                'car_type' => 'Sedan',
                'daily_rent_price' => 200.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg'
            ],
            [
                'name' => 'Corolla',
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 50.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/2365572/pexels-photo-2365572.jpeg'
            ],
            [
                'name' => 'Civic',
                'brand' => 'Honda',
                'model' => 'Civic',
                'year' => 2020,
                'car_type' => 'Sedan',
                'daily_rent_price' => 55.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg'
            ],
            [
                'name' => 'Mustang GT',
                'brand' => 'Ford',
                'model' => 'GT',
                'year' => 2021,
                'car_type' => 'Coupe',
                'daily_rent_price' => 150.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg'
            ],
            [
                'name' => 'Range Rover Evoque',
                'brand' => 'Land Rover',
                'model' => 'Evoque',
                'year' => 2022,
                'car_type' => 'SUV',
                'daily_rent_price' => 250.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg'
            ],
            [
                'name' => 'A4',
                'brand' => 'Audi',
                'model' => 'A4',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 120.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/3752194/pexels-photo-3752194.jpeg'
            ],
            [
                'name' => 'Camry',
                'brand' => 'Toyota',
                'model' => 'Camry',
                'year' => 2022,
                'car_type' => 'Sedan',
                'daily_rent_price' => 65.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/919073/pexels-photo-919073.jpeg'
            ],
            [
                'name' => 'CX-5',
                'brand' => 'Mazda',
                'model' => 'CX-5',
                'year' => 2021,
                'car_type' => 'SUV',
                'daily_rent_price' => 80.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg'
            ],
            [
                'name' => '3 Series',
                'brand' => 'BMW',
                'model' => '330i',
                'year' => 2022,
                'car_type' => 'Sedan',
                'daily_rent_price' => 140.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/575386/pexels-photo-575386.jpeg'
            ],
            [
                'name' => 'G-Class',
                'brand' => 'Mercedes-Benz',
                'model' => 'G550',
                'year' => 2023,
                'car_type' => 'SUV',
                'daily_rent_price' => 350.00,
                'availability' => true,
                'image' => 'https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg'
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
