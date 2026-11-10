<?php

namespace App\Database\Seeds;

use App\Models\ContactModel;
use App\Models\PortfolioModel;
use App\Models\ProductModel;
use App\Models\ServiceModel;
use App\Models\TestimonialModel;
use CodeIgniter\Database\Seeder;

/**
 * Dummy content for demos and screenshots. All names, companies and messages are fictional.
 * Each table is only filled when it is still empty, so running this twice adds no duplicates.
 *
 * Usage: php spark db:seed DemoContentSeeder
 */
class DemoContentSeeder extends Seeder
{
    public function run()
    {
        $this->fill(new ServiceModel(), [
            ['title' => 'Web Development', 'description' => 'Company websites, web apps and admin panels built with modern PHP frameworks.'],
            ['title' => 'Mobile App Development', 'description' => 'Android and iOS apps connected to your existing systems.'],
            ['title' => 'UI/UX Design', 'description' => 'User research, wireframes and interface design that is easy to use.'],
            ['title' => 'Cloud & DevOps', 'description' => 'Server setup, deployment pipelines and ongoing maintenance.'],
        ]);

        $this->fill(new ProductModel(), [
            ['name' => 'Starter Company Profile', 'description' => 'A ready-to-use company website with an admin panel to manage content.', 'price' => 3500000],
            ['name' => 'Online Booking System', 'description' => 'Appointment and reservation system with schedule management.', 'price' => 7500000],
            ['name' => 'Point of Sale App', 'description' => 'Cashier app with stock tracking and daily sales reports.', 'price' => 9000000],
        ]);

        $this->fill(new PortfolioModel(), [
            ['title' => 'Retail POS Dashboard', 'description' => 'Sales dashboard for a retail store', 'image' => 'demo-1.png'],
            ['title' => 'Clinic Booking App', 'description' => 'Doctor appointment booking system', 'image' => 'demo-2.png'],
            ['title' => 'Logistics Tracker', 'description' => 'Real-time shipment tracking', 'image' => 'demo-3.png'],
            ['title' => 'E-Learning Portal', 'description' => 'Online classes and course materials', 'image' => 'demo-4.png'],
            ['title' => 'Hotel Reservation', 'description' => 'Room booking and guest management', 'image' => 'demo-5.png'],
            ['title' => 'Inventory System', 'description' => 'Warehouse stock management', 'image' => 'demo-6.png'],
        ]);

        $this->fill(new TestimonialModel(), [
            ['name' => 'Andi Pratama', 'position' => 'CEO, Sample Retail Co.', 'message' => 'The team responded quickly and delivered a clean, easy-to-manage website.', 'image' => null],
            ['name' => 'Sari Wulandari', 'position' => 'Owner, Sample Clinic', 'message' => 'The booking system makes it much easier for our patients to schedule visits.', 'image' => null],
            ['name' => 'Budi Santoso', 'position' => 'Operations Manager, Sample Logistics', 'message' => 'The tracking dashboard helps our daily operations a lot.', 'image' => null],
        ]);

        $now = date('Y-m-d H:i:s');
        $this->fill(new ContactModel(), [
            ['name' => 'Rina Example', 'email' => 'rina@example.com', 'message' => 'Hello, I would like a website for my online shop. Could you send a cost estimate?', 'created_at' => $now],
            ['name' => 'Dimas Example', 'email' => 'dimas@example.com', 'message' => 'Can you build a cashier app that connects several branches?', 'created_at' => $now],
            ['name' => 'Lina Example', 'email' => 'lina@example.com', 'message' => 'We are interested in working together on a campus website redesign.', 'created_at' => $now],
        ]);
    }

    private function fill($model, array $rows): void
    {
        if ($model->countAllResults() > 0) {
            return;
        }

        foreach ($rows as $row) {
            $model->insert($row);
        }
    }
}
