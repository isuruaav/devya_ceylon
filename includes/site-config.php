<?php

declare(strict_types=1);

$site = [
    'name' => 'DEVYA CEYLON',
    'subtitle' => 'Ayurveda Channelling Centre',
    'tagline' => 'Empowering Well-being',
    'phone_display' => '071 905 9250',
    'phone_href' => '+94719059250',
    'whatsapp' => '94719059250',
    'location' => 'Kandy, Sri Lanka',
    'maps_url' => 'https://www.google.com/maps/search/?api=1&query=Kandy%2C%20Sri%20Lanka',
];

$navigation = [
    ['key' => 'home', 'label' => 'Home', 'href' => 'index.php', 'icon' => 'fa-house'],
    ['key' => 'about', 'label' => 'About Us', 'href' => 'about-us.php', 'icon' => 'fa-circle-info'],
    ['key' => 'services', 'label' => 'Services', 'href' => 'services.php', 'icon' => 'fa-spa'],
    ['key' => 'facilities', 'label' => 'Facilities & Team', 'href' => 'facilities.php', 'icon' => 'fa-building-circle-check'],
    ['key' => 'appointments', 'label' => 'Appointments', 'href' => 'appointments.php', 'icon' => 'fa-calendar-check'],
    ['key' => 'contact', 'label' => 'Contact', 'href' => 'contact.php', 'icon' => 'fa-phone-volume'],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function active_nav(string $key, string $currentPage): string
{
    return $key === $currentPage ? ' is-active' : '';
}
