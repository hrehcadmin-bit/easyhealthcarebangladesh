<?php
$utilityPage = [
  'title' => 'Patient Portal',
  'eyebrow' => 'All Your Healthcare in One Unified Space',
  'description' => 'Manage appointments, access digital prescriptions, review diagnostic reports, and consult specialists.',
  'notice' => 'Patient self-service portal registration is launching soon. For appointment serials or assistance, please contact our support team.',
  'features' => [
    ['icon' => 'calendar-check', 'title' => 'My Appointments', 'description' => 'Real-time updates on your chamber bookings, doctor serial numbers, and teleconsultation links.'],
    ['icon' => 'folder-heart', 'title' => 'Health Records', 'description' => 'Safely store family medical histories, immunization charts, and ongoing care plans.'],
    ['icon' => 'user-round', 'title' => 'Personal Health Profile', 'description' => 'Personalized health insights, subscription plan management, and medicine refill reminders.'],
  ],
];
require __DIR__ . '/../includes/utility-page.php';
