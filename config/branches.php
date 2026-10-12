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

    // Webflow-hosted image used on every service-page hero.
    'hero_image' => 'https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/6651cd6e32cdfbefd8a16864_service-01.jpg',

    // The 10 service pages. Order here drives the navbar dropdown order.
    'butterworth' => [
        [
            'slug' => 'butterworth',
            'title' => 'Butterworth Pinang',
            'meta' => 'At Butterworth Pinang — residential care that treats every resident as an individual, preserving dignity and independence.',
            'icon' => 'bi-house-heart-fill',
            'intro' => 'At Butterworth Pinang, the residential care we provide is what you might expect in an ordinary care home for older people — but we go further. Our Assisted Living services are all about treating each and every resident as an individual. By understanding our residents’ needs, preserving dignity and respecting independence, we help to create a real sense of home.',
        ],
        
    ],
];
