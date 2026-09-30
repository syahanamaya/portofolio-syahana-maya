<?php

return [
    'personal' => [
        'name' => 'Syahana Maya Syabana',
        'display_name' => 'Syahana Maya Syabana',
        'short_name' => 'Syahana Maya',
        'tagline' => "Fresh Graduate Sistem Informasi | Web Developer | Lifelong Learner",
        'hero_badge' => "Hello,",
        'hero_title_lead' => "I'm",
        'hero_title_name' => 'Syahana Maya Syabana',
        'hero_subtitle' => "Fresh Graduate Information Systems | Web Developer | Lifelong Learner",
        'hero_description' => "Fresh graduate Sistem Informasi yang passionate dalam web development, UI/UX, dan dunia kreatif digital. Saya terus belajar, bereksperimen, dan menciptakan karya yang menggabungkan fungsi dengan visual yang menarik.",
        'cv_file' => 'cv.pdf',
        'profile_hero' => '/images/profile/shahana-hero.png',
        'profile_avatar' => '/images/profile/shahana-avatar.png',
        'status' => 'Fresh Graduate & Open to Opportunities',
    ],

    'about' => [
        'tag' => "About Me",
        'title' => "Profil Profesional",
        'paragraphs' => [
            "Saya fresh graduate S1 Sistem Informasi Universitas Pamulang dengan IPK 3,68. Saya berpengalaman menganalisis kebutuhan pengguna, merancang proses bisnis, dan mengembangkan sistem informasi berbasis web menggunakan metode Agile.",
            "Saya terbiasa menyusun dokumentasi sistem, activity diagram, dan use case diagram, serta merancang antarmuka menggunakan Figma. Saya tertarik mengembangkan solusi digital yang bermanfaat melalui analisis sistem dan pengembangan web.",
        ],
        'highlights' => [
            [
                'icon' => 'academic-cap',
                'title' => 'Fresh Graduate Sistem Informasi',
                'subtitle' => 'Universitas Pamulang',
            ],
            [
                'icon' => 'chart',
                'title' => 'IPK 3,68',
                'subtitle' => 'Lulus September 2026',
            ],
            [
                'icon' => 'briefcase',
                'title' => 'Fokus Keahlian',
                'subtitle' => 'Analisis Sistem dan Pengembangan Web',
            ],
            [
                'icon' => 'map-pin',
                'title' => 'Tangerang Selatan',
                'subtitle' => 'Banten, Indonesia',
            ],
        ],
        'sticky_note' => [
            'title' => 'Good Things Take Time ♡',
            'image' => '/images/decorations/good-things-note.png',
        ],
    ],

    'skills' => [
        'tag' => "My Skills",
        'title' => "Keahlian Saya",
        'description' => "Keahlian sistem informasi, analisis, desain, dan aplikasi perkantoran yang tercantum dalam CV saya:",
        'doodle_text' => "Still Learning . . . ☺",
        'groups' => [
            [
                'title' => 'Sistem Informasi',
                'icon' => 'code',
                'color' => 'primary',
                'skills' => [
                    'Analisis Sistem dan Kebutuhan Pengguna',
                    'Perancangan Proses Bisnis',
                    'UML: Activity & Use Case Diagram',
                    'Dokumentasi Sistem',
                    'Pengembangan Sistem Informasi Berbasis Web',
                    'Metode Agile',
                ],
            ],
            [
                'title' => 'Desain & Kreatif',
                'icon' => 'wrench',
                'color' => 'primary',
                'skills' => [
                    'Figma',
                    'Adobe Illustrator',
                    'Adobe Photoshop',
                    'CapCut',
                ],
            ],
            [
                'title' => 'Microsoft Office',
                'icon' => 'pencil',
                'color' => 'primary',
                'skills' => [
                    'Microsoft Excel',
                    'Microsoft Word',
                    'Microsoft PowerPoint',
                ],
            ],
            [
                'title' => 'Kolaborasi',
                'icon' => 'users',
                'color' => 'primary',
                'skills' => [
                    'Teamwork',
                ],
            ],
        ],
    ],

    'projects' => [
        'tag' => "My Projects",
        'title' => "Proyek Saya",
        'description' => "Beberapa proyek sistem informasi dan web yang pernah saya kerjakan.",
        'items' => [
            [
                'id' => 'perpus',
                'title' => 'Sistem Informasi Perpustakaan',
                'category' => 'Web Application & Skripsi',
                'short_description' => 'Perancangan dan implementasi sistem informasi perpustakaan berbasis web menggunakan metode Agile.',
                'full_description' => 'Perancangan dan implementasi sistem informasi perpustakaan berbasis web yang dibangun sebagai topik skripsi akhir. Sistem ini mendigitalisasi pengelolaan sirkulasi buku, katalogisasi koleksi, pendaftaran anggota, pencatatan peminjaman, serta perhitungan denda otomatis. Dikembangkan menggunakan metode Agile untuk memastikan alur kerja fleksibel dan antarmuka yang user-friendly.',
                'technologies' => ['Laravel', 'MySQL', 'Tailwind'],
                'image' => '/images/projects/perpus.png',
                'demo_url' => '#',
                'repo_url' => 'https://github.com/syahanamaya/sistem-informasi-perpustakaan',
                'features' => [
                    'Katalog buku terstruktur dengan filter pencarian instan',
                    'Sistem sirkulasi peminjaman & pengembalian otomatis',
                    'Perhitungan denda keterlambatan buku secara presisi',
                    'Dashboard ringkasan statistik untuk pustakawan',
                    'Desain antarmuka bersih & responsif berbasis Tailwind CSS',
                ],
            ],
            [
                'id' => 'pengaduan',
                'title' => 'Sistem Pengaduan Siswa',
                'category' => 'Web Application',
                'short_description' => 'Aplikasi pengaduan siswa di SMK Jakarta Pusat 1 dengan metode Agile.',
                'full_description' => 'Aplikasi pengaduan siswa berbasis web untuk membantu proses penyampaian dan pengelolaan aspirasi maupun keluhan di lingkungan sekolah secara transparan dan terorganisir. Dilengkapi alur verifikasi pengaduan, notifikasi status tiket, dan opsi laporan anonim untuk melindungi privasi siswa.',
                'technologies' => ['Laravel', 'MySQL', 'HTML/CSS/JS'],
                'image' => '/images/projects/pengaduan.png',
                'demo_url' => '#',
                'repo_url' => 'https://github.com/syahanamaya/sistem-pengaduan-siswa',
                'features' => [
                    'Formulir pelaporan pengaduan dilengkapi kategori masalah',
                    'Pelacakan status tiket (Pending, Diproses, Selesai)',
                    'Tanggapan resmi langsung dari pihak kesiswaan/guru',
                    'Rekapitulasi dan pelaporan berkala bagi kepala sekolah',
                    'Antarmuka ramah pengguna bagi siswa melalui smartphone',
                ],
            ],
            [
                'id' => 'komnas',
                'title' => 'Web Form Komnas HAM',
                'category' => 'Web Form & Portal',
                'short_description' => 'Pengembangan website form pengaduan pelanggaran HAM sebagai project perkuliahan.',
                'full_description' => 'Pengembangan formulir digital interaktif untuk intake pengaduan dugaan pelanggaran HAM yang dibuat sebagai tugas besar perkuliahan. Mengutamakan kemudahan navigasi multi-step form dan validasi berkas lampiran.',
                'technologies' => ['PHP', 'MySQL', 'HTML/CSS/JS'],
                'image' => '/images/projects/komnas.png',
                'demo_url' => '#',
                'repo_url' => 'https://github.com/syahanamaya/web-form-komnas-ham',
                'features' => [
                    'Multi-step form terstruktur dengan panduan pengisian',
                    'Unggah bukti berkas dan verifikasi format dokumen',
                    'Validasi data sisi klien dan server',
                    'Konfirmasi bukti tanda terima pengaduan digital',
                ],
            ],
        ],
    ],

    'timeline' => [
        'tag' => "Experience & Education",
        'title' => "Pengalaman & Pendidikan",
        'education' => [
            [
                'period' => 'Sep 2022 – Sep 2026',
                'institution' => 'Universitas Pamulang',
                'role' => 'S1 Sistem Informasi · IPK 3,68',
                'description' => 'Lulus sebagai fresh graduate Sistem Informasi.',
            ],
        ],
        'experience' => [
            [
                'period' => 'Sep 2026 – Sekarang',
                'institution' => 'UMKM Warung Makan',
                'role' => 'Admin Media Sosial',
                'bullets' => [
                    'Menyusun content calendar.',
                    'Membuat caption Instagram dan Threads.',
                    'Membuat desain promosi.',
                    'Menjawab komentar dan direct message.',
                ],
            ],
            [
                'period' => 'Jul 2024 – Agu 2024',
                'institution' => 'Komnas HAM',
                'role' => 'Staf Dukungan TI · Magang',
                'bullets' => [
                    'Membantu pengaturan jaringan LAN dan Wi-Fi.',
                    'Melakukan instalasi Windows dan Microsoft Office.',
                    'Membuat desain dan perancangan website.',
                    'Membantu mencatat hasil rapat.',
                ],
            ],
        ],
    ],

    'certifications' => [
        'tag' => 'Sertifikasi',
        'title' => 'Sertifikat Magang',
        'items' => [
            [
                'name' => 'Sertifikat Magang',
                'issuer' => 'Komnas HAM',
                'period' => 'Jul 2024 – Agu 2024',
            ],
        ],
    ],

    'contact' => [
        'tag' => "Get In Touch",
        'title' => "Hubungi Saya",
        'description' => "Untuk informasi lebih lanjut mengenai proyek dan keahlian saya, silakan hubungi melalui kontak berikut.",
        'cta_text' => "Let's Connect!",
        'info' => [
            [
                'type' => 'email',
                'label' => 'Email',
                'value' => 'syahanamaya@gmail.com',
                'link' => 'mailto:syahanamaya@gmail.com',
                'icon' => 'mail',
            ],
            [
                'type' => 'phone',
                'label' => 'WhatsApp / Telepon',
                'value' => '+62 858 9296 0832',
                'link' => 'https://wa.me/6285892960832',
                'icon' => 'phone',
            ],
            [
                'type' => 'location',
                'label' => 'Domisili',
                'value' => 'Tangerang, Indonesia',
                'link' => 'https://maps.google.com/?q=Tangerang+Indonesia',
                'icon' => 'map-pin',
            ],
        ],
        'socials' => [
            [
                'name' => 'Instagram',
                'url' => 'https://instagram.com/syahanamaya',
                'icon' => 'instagram',
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com/in/syahana-maya',
                'icon' => 'linkedin',
            ],
            [
                'name' => 'GitHub',
                'url' => 'https://github.com/syahanamaya',
                'icon' => 'github',
            ],
            [
                'name' => 'Email',
                'url' => 'mailto:syahanamaya@gmail.com',
                'icon' => 'mail',
            ],
        ],
    ],
];
