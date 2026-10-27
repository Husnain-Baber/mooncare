<?php

/**
 * Single source of truth for the Moon Elderly Care Center site.
 *
 * Drives the shared topbar, navbar dropdown, mobile menu, footer,
 * and the service page template. Edit contact details or the service
 * list here once and it updates everywhere.
 */
return [
    'brand' => 'Moon Elderly Care Center',

    'phone' => '+60 16 440 9013',
    'email' => 'moonelderlycarecenter@gmail.com',
    'address' => 'No. 9, Lorong Tanjung Permai 3 Villa Tanjung Permai 14100, Simpang Ampat Penang',
    'credit' => 'HB Tech',
    'credit_url' => 'https://hbtech.digital',
    


    // Care centres shown in the "Our Location" section on the home page.
    // Drives the map pins, the location rail and the "Get directions" links.
    //
    // NOTE: lat/lng are approximate (estate-level). The Google "Get directions"
    // link always resolves the full written address, so visitors still arrive
    // at the correct spot. Ask the branch team to confirm each pin before launch
    // if you need street-level precision.
    'locations' => [
        [
            'name' => 'Simpang Ampat Centre',
            'tag' => 'Main branch',
            'area' => 'Simpang Ampat, Pulau Pinang',
            'address' => 'No. 9, Lorong Tanjung Permai 3, Villa Tanjung Permai, 14100 Simpang Ampat, Pulau Pinang',
            'lat' => 5.2781,
            'lng' => 100.4579,
        ],
        [
            'name' => 'Sungai Lalang Centre',
            'tag' => 'Branch',
            'area' => 'Sungai Lalang, Bedong, Kedah',
            'address' => 'No. F4, Jalan Bukit Bayu A4, Taman Bukit Bayu, Sungai Lalang, 08100 Bedong, Kedah',
            'lat' => 5.7098,
            'lng' => 100.5489,
        ],
        [
            'name' => 'Sungai Petani Centre',
            'tag' => 'Branch',
            'area' => 'Sungai Petani, Kedah',
            'address' => 'No. 9A, Jalan Permata Indah 2, Taman Permata Indah, Sungai Petani, Kedah',
            'lat' => 5.6465,
            'lng' => 100.4885,
        ],
        [
            'name' => 'Puteri Jaya Centre',
            'tag' => 'Branch',
            'area' => 'Bandar Puteri Jaya, Sungai Petani, Kedah',
            'address' => 'No. 427, Jalan Puteri Residensi 12, Bandar Puteri Jaya, 08000 Sungai Petani, Kedah',
            'lat' => 5.6041,
            'lng' => 100.5434,
        ],
        [
            'name' => 'Kulim Centre',
            'tag' => 'Branch',
            'area' => 'Kampung Padang, Kulim, Kedah',
            'address' => 'Lot 366, PT 892, Jalan Serdang, Kampung Padang, 09000 Kulim, Kedah',
            'lat' => 5.3851,
            'lng' => 100.5707,
        ],
    ],

    // Branch pages. Each entry drives one /<slug> page (see BranchController).
    //
    // NOTE: 'address' and 'map_query' for Butterworth are placeholders at town
    // level — replace them with the branch's full street address and the map,
    // directions link and contact section update automatically.
    'butterworth' => [
        [
            'slug' => 'butterworth',
            'title' => 'Butterworth Pinang',
            'heading' => 'Nursing Home Butterworth Pinang',
            'tagline' => 'Compassionate & Professional Senior Care',
            'meta' => 'Nursing home in Butterworth, Pulau Pinang — Moon Elderly Care Center offers assisted living, dementia care, palliative care, respite care, home nursing and more, 24 hours a day.',
            'icon' => 'bi-house-heart-fill',
            'intro' => 'At Moon Elderly Care Center Butterworth, we go beyond ordinary residential care. Every resident is treated as an individual — we understand their needs, preserve their dignity and respect their independence, so the centre feels like a real second home.',
            'address' => '27, Jalan Intan, Taman Intan, 13000 Butterworth, Pulau Pinang, Malaysia',
            'map_query' => 'Butterworth, Pulau Pinang, Malaysia',
            'hero_image' => 'assets/images/malacca/1.jpg',
            'about_image' => 'assets/images/malacca/23.jpg',
            'highlights' => [
                'Registered nurses & trained caregivers on site 24/7',
                'Personalised care plans for every resident',
                'Safe, clean and home-like environment',
                'Flexible day, respite and long-stay options',
            ],
            'why' => [
                ['icon' => 'bi-person-badge-fill', 'title' => 'Qualified & caring staff', 'desc' => 'Trained nurses and caregivers who treat every resident like family.'],
                ['icon' => 'bi-activity', 'title' => 'Rehabilitation & therapy', 'desc' => 'Gentle, guided exercise to help residents regain strength and independence.'],
                ['icon' => 'bi-puzzle-fill', 'title' => 'Dementia & specialised care', 'desc' => 'Patient, individualised support for memory loss and complex medical needs.'],
                ['icon' => 'bi-heart-pulse-fill', 'title' => 'Daily health monitoring', 'desc' => 'Medication, vitals and wellbeing checked consistently, day and night.'],
                ['icon' => 'bi-flower2', 'title' => 'Holistic wellbeing', 'desc' => 'Nutritious meals, companionship and activities that nurture body and mind.'],
            ],
            'gallery' => [
                ['malacca/1.jpg', 'Our Butterworth centre'],
                ['malacca/19.jpg', 'Welcoming entrance'],
                ['malacca/23.jpg', 'Comfortable lounge'],
                ['malacca/34.jpg', 'Bright living area'],
                ['malacca/25.jpg', 'Care-ready rooms'],
                ['malacca/32.jpg', 'Exercise & therapy corner'],
                ['malacca/39.jpg', 'Warm, cosy seating'],
                ['malacca/43.jpg', 'Spacious resident ward'],
                ['malacca/22.jpg', 'Nursing station'],
                ['malacca/57.jpg', 'Private rooms'],
                ['malacca/15.jpg', 'Gardens & grounds'],
                ['malacca/88.jpg', 'Family lounge'],
            ],
        ],
    ],
];
