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
    'pages' => [
        [
            'slug' => 'assisted-living',
            'title' => 'Assisted Living Care',
            'meta' => 'Assisted living at Moon Elderly Care Center — residential care that treats every resident as an individual, preserving dignity and independence.',
            'icon' => 'bi-house-heart-fill',
            'image' => 'assets/images/services/7.jpg',
            'intro' => 'At Moon Elderly Care Center, the residential care we provide is what you might expect in an ordinary care home for older people — but we go further. Our Assisted Living services are all about treating each and every resident as an individual. By understanding our residents’ needs, preserving dignity and respecting independence, we help to create a real sense of home.',
        ],
        [
            'slug' => 'day-care',
            'title' => 'Day Care',
            'meta' => 'Day care for seniors at Moon Elderly Care Center — a safe, social and caring environment while you are away from home.',
            'icon' => 'bi-sunrise-fill',
            'image' => 'assets/images/services/1.jpg',
            'intro' => 'We offer day care services for your loved one so that you can have peace of mind while away from home. It’s a warm, safe and social setting with care on hand whenever it’s needed.',
        ],
        [
            'slug' => 'dementia-care',
            'title' => 'Dementia Care',
            'meta' => 'Specialised dementia and Alzheimer\'s care at Moon Elderly Care Center — dedicated, individualised support in a safe environment.',
            'icon' => 'bi-puzzle-fill',
            'image' => 'assets/images/services/6.jpg',
            'intro' => 'Moon Elderly Care Center features a dedicated, specialised dementia care area devoted entirely to residents living with Alzheimer’s, dementia or other forms of memory loss. It’s the quality, individualised care you’ll find in our assisted living — but with a specialised focus on caring for people living with the effects of Alzheimer’s or other forms of dementia.',
        ],
        [
            'slug' => 'health-care',
            'title' => 'Health & Support',
            'meta' => 'Health and support services for the elderly at Moon Elderly Care Center — senior independent living with 24/7 caring oversight.',
            'icon' => 'bi-heart-pulse-fill',
            'image' => 'assets/images/services/5.webp',
            'intro' => 'Moon Elderly Care Center offers health and support to the elderly people of our country, with excellent senior independent living options. Taking care of an elderly family member is not easy — they might need caring oversight twenty-four hours a day, seven days a week, particularly when their health is failing or they live with age-related conditions such as dementia or Alzheimer’s.',
        ],
        [
            'slug' => 'home-nursing',
            'title' => 'Home Nursing',
            'meta' => 'Professional home nursing care from Moon Elderly Care Center — care for your loved ones in a familiar home environment.',
            'icon' => 'bi-house-heart-fill',
            'image' => 'assets/images/services/9.webp',
            'intro' => 'When you prefer to keep your loved ones at home, we can arrange to send our professional staff to care for them in a familiar environment. We also provide medical chaperones to hospitals for your loved ones, so no journey is taken alone.',
        ],
        [
            'slug' => 'independent-living',
            'title' => 'Independent Living Care',
            'meta' => 'Independent living at Moon Elderly Care Center — your own home, without the worry of maintenance, chores or cooking.',
            'icon' => 'bi-key-fill',
            'image' => 'assets/images/services/10.jpg',
            'intro' => 'At Moon Elderly Care Center we also offer Independent Living to a limited number of residents. As the name suggests, it’s a lifestyle independent of any care services — although these are all available on-site should you need them. Independent Living here is just like living in your own home, but without the worry of maintenance, household chores or even cooking.',
        ],
        [
            'slug' => 'palliative-care',
            'title' => 'Palliative Care',
            'meta' => 'Compassionate palliative care at Moon Elderly Care Center — treating physical and emotional symptoms with comfort and dignity.',
            'icon' => 'bi-flower1',
            'image' => 'assets/images/services/4.jpg',
            'intro' => 'At Moon Elderly Care Center, palliative care treats the physical and emotional symptoms that occur during the last stages of life. It includes treatments such as medicine, physical therapy, nutrition management, counselling and coordination with hospice and mental health providers. We make residents as comfortable as possible and support families with resources and emotional support.',
        ],
        [
            'slug' => 'post-stroke',
            'title' => 'Post-Stroke Rehabilitation',
            'meta' => 'Post-stroke rehabilitation at Moon Elderly Care Center — a strong physio team and a tailored programme in the golden 90-day window.',
            'icon' => 'bi-activity',
            'image' => 'assets/images/services/2.webp',
            'intro' => 'Moon Elderly Care Center has a strong physio team well versed in working with post-stroke residents. As the first 90 days after a stroke are known as the golden period, our physiotherapy team creates a tailor-made programme that maximises the chances of recovery for your loved ones.',
        ],
        [
            'slug' => 'professional-service',
            'title' => 'Professional Services',
            'meta' => 'Affordable professional senior care from Moon Elderly Care Center — holistic healing services at reasonable prices.',
            'icon' => 'bi-person-badge-fill',
            'image' => 'assets/images/services/8.jpg',
            'intro' => 'We offer professional services at affordable, reasonable prices — we do not want to burden families. We provide stellar senior living and holistic healing services while working for a minimum of profit, just enough to sustain our facilities. Fifty percent of our full income goes to our poor and sick residents. We have a dream to take care of every elderly person who lives alone and might need help.',
        ],
        [
            'slug' => 'respite-care',
            'title' => 'Respite Care',
            'meta' => 'Respite care at Moon Elderly Care Center — temporary, comfortable care for seniors while home carers recharge.',
            'icon' => 'bi-stopwatch-fill',
            'image' => 'assets/images/services/3.jpg',
            'intro' => 'Sometimes you just need to relax and take it easy. Maybe you’re getting over an illness or an operation, or your home carers simply need a break while they recharge their batteries. Respite care is temporary care for older people in a care home setting — available for assisted living, residential, memory and nursing care. All our respite carers are trained, qualified and caring.',
        ],
    ],

    // Shared "What's included" feature cards on every service page.
    'features' => [
        ['icon' => 'bi-person-hearts', 'title' => 'Personal care assistance', 'desc' => 'Helping with daily activities to maintain independence.'],
        ['icon' => 'bi-clipboard2-pulse', 'title' => 'Specialised care', 'desc' => 'Tailored care for specific medical needs.'],
        ['icon' => 'bi-house-heart', 'title' => 'Home nursing services', 'desc' => 'Professional nursing care is provided at home.'],
        ['icon' => 'bi-chat-heart-fill', 'title' => 'Companionship services', 'desc' => 'Enhancing quality of life through social interaction.'],
        ['icon' => 'bi-activity', 'title' => 'Rehabilitation support', 'desc' => 'Individualised care, safety, familiarity, emotional support.'],
        ['icon' => 'bi-flower2', 'title' => 'Palliative care services', 'desc' => 'Comfort, relief, support, improved quality of life.'],
    ],

    // Shared "Why choose us" points on every service page.
    'why' => [
        ['icon' => 'bi-person-check-fill', 'title' => 'Experienced team', 'desc' => 'Our caregivers are trained professionals who truly care about your well-being.'],
        ['icon' => 'bi-calendar2-check-fill', 'title' => 'Flexible scheduling', 'desc' => 'We offer flexible scheduling to fit your lifestyle.'],
        ['icon' => 'bi-heart-fill', 'title' => 'Personalised attention', 'desc' => 'Every resident is treated as an individual, with dignity and respect.'],
    ],
];
