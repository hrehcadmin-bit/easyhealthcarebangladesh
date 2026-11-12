<?php
$utilityPage = [
  'title' => 'Doctor Portal',
  'eyebrow' => 'Dedicated for Medical Specialists',
  'description' => 'Comprehensive management portal for BMDC-registered doctors and healthcare specialists partner network.',
  'notice' => 'Doctor onboarding and portal login are currently in beta testing. Registered doctors will receive login credentials soon.',
  'features' => [
    ['icon' => 'id-card', 'title' => 'Specialist Profile', 'description' => 'Manage chamber locations, consultation hours, fees, and professional credentials easily.'],
    ['icon' => 'calendar-days', 'title' => 'Appointment Roster', 'description' => 'View, accept, and manage daily patient queues, online teleconsultations, and follow-ups.'],
    ['icon' => 'stethoscope', 'title' => 'Clinical Records', 'description' => 'Safely write digital prescriptions and review prior patient history and diagnostic lab results.'],
  ],
];
require __DIR__ . '/../includes/utility-page.php';
