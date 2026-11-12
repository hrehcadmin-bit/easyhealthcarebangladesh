<?php
$utilityPage = [
  'title' => 'Online Lab Reports',
  'eyebrow' => 'Diagnostic Results at Your Fingertips',
  'description' => 'Fast, verified, and confidential digital access to your pathology and diagnostic laboratory test results.',
  'notice' => 'Digital report lookup with Patient ID and Invoice Number is integrating with partner labs. Reports can also be requested via hotline.',
  'features' => [
    ['icon' => 'file-heart', 'title' => 'Instant Digital PDF', 'description' => 'Download and share verified diagnostic reports with your physician anywhere, anytime.'],
    ['icon' => 'clipboard-list', 'title' => 'Historical Trends', 'description' => 'Track your key health markers like blood sugar, lipid profile, and CBC over time.'],
    ['icon' => 'lock-keyhole', 'title' => 'Encrypted & Secure', 'description' => 'Your medical records and private health results are safeguarded with strict encryption standards.'],
  ],
];
require __DIR__ . '/../includes/utility-page.php';
