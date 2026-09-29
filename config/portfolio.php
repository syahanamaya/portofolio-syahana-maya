<?php

return [
    'personal' => [
        'name' => "Shahana Maya Sya'bana",
        'display_name' => "Shahana Maya Syabana",
        'short_name' => "Shahana Maya",
        'tagline' => "Mahasiswa Sistem Informasi | Web Developer | Lifelong Learner",
        'hero_badge' => "Hello,",
        'hero_title_lead' => "I'm",
        'hero_title_name' => "Shahana Maya Syabana",
        'hero_subtitle' => "Information Systems Student | Web Developer | Lifelong Learner",
        'hero_description' => "Saya adalah mahasiswa Sistem Informasi yang tertarik pada pengembangan web, manajemen data, dan solusi digital yang bermanfaat. Saat ini saya sedang menyelesaikan studi akhir saya dan terus belajar untuk menjadi versi terbaik dari diri saya.",
        'cv_file' => 'cv.pdf',
        'profile_hero' => '/images/profile/shahana-hero.png',
        'profile_avatar' => '/images/profile/shahana-avatar.png',
        'status' => 'Mahasiswa Tingkat Akhir & Open to Opportunities',
    ],

    'about' => [
        'tag' => "About Me",
        'title' => "Kenalan Yuk!",
        'paragraphs' => [
            "Halo! Saya Shahana Maya Syabana, mahasiswa Sistem Informasi di Universitas Pamulang. Saya memiliki ketertarikan di bidang teknologi, terutama pada pengembangan web, database, dan sistem informasi yang dapat membantu mempermudah proses dan meningkatkan efisiensi.",
            "Saya adalah pribadi yang suka belajar hal baru, terbuka terhadap masukan, dan selalu berusaha memberikan yang terbaik dalam setiap proses.",
        ],
        'highlights' => [
            [
                'icon' => 'academic-cap',
                'title' => 'Mahasiswa Sistem Informasi',
                'subtitle' => 'Universitas Pamulang',
            ],
            [
                'icon' => 'map-pin',
                'title' => 'Tinggal di Tangerang',
                'subtitle' => 'Tangerang Selatan, Banten',
            ],
            [
                'icon' => 'calendar',
                'title' => 'Semester Akhir',
                'subtitle' => 'Sedang menyelesaikan skripsi (IPK 3,68)',
            ],
            [
                'icon' => 'heart',
                'title' => 'Hobi & Minat',
                'subtitle' => 'Membaca, mendengarkan musik, menonton, dan desain',
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
        'description' => "Berikut beberapa keterampilan yang saya kuasai dan terus kembangkan:",
        'doodle_text' => "Still Learning . . . ☺",
        'groups' => [
            [
                'title' => 'Programming & Web',
                'icon' => 'code',
                'color' => 'primary',
                'skills' => [
                    'HTML, CSS, JavaScript',
                    'PHP (Laravel)',
                    'Tailwind CSS',
                    'MySQL',
                ],
            ],
            [
                'title' => 'Tools & Software',
                'icon' => 'wrench',
                'color' => 'primary',
                'skills' => [
                    'VS Code',
                    'Git & GitHub',
                    'Figma',
                    'Microsoft Office',
                ],
            ],
            [
                'title' => 'Design',
                'icon' => 'pencil',
                'color' => 'primary',
                'skills' => [
                    'Wireframing',
                    'UI/UX Design',
                    'Canva',
                    'Basic Editing',
                ],
            ],
            [
                'title' => 'Soft Skills',
                'icon' => 'users',
                'color' => 'primary',
                'skills' => [
                    'Problem Solving',
                    'Time Management',
                    'Teamwork',
                    'Communication',
                ],
            ],
        ],
    ],

    'projects' => [
        'tag' => "My Projects",
        'title' => "Proyek Saya",
        'description' => "Beberapa proyek yang pernah saya kerjakan selama kuliah maupun di luar perkuliahan.",
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
                'short_description' => 'Pengembangan website form pengaduan pelanggaran HAM (project perkuliahan).',
                'full_description' => 'Pengembangan formulir digital interaktif untuk intake pengaduan dugaan pelanggaran HAM yang dibuat sebagai tugas besar perkuliahan. Mengutamakan kemudahan navigasi multi-step form, validasi berkas lampiran, dan penyimpanan terenkripsi yang aman.',
                'technologies' => ['PHP', 'MySQL', 'HTML/CSS/JS'],
                'image' => '/images/projects/komnas.png',
                'demo_url' => '#',
                'repo_url' => 'https://github.com/syahanamaya/web-form-komnas-ham',
                'features' => [
                    'Multi-step form terstruktur dengan panduan pengisian',
                    'Unggah bukti berkas dan verifikasi format dokumen',
                    'Validasi keamanan data sisi klien & server',
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
                'period' => '2022 - Sekarang',
                'institution' => 'Universitas Pamulang',
                'role' => 'S1 Sistem Informasi',
                'description' => 'IPK 3,68. Mahasiswa tingkat akhir fokus pada Web Development dan UI/UX. Menyelesaikan tugas akhir skripsi berupa rancang bangun Sistem Informasi Perpustakaan berbasis Laravel.',
            ],
            [
                'period' => '2019 - 2022',
                'institution' => 'SMK Budi Mulia Ciledug',
                'role' => 'Jurusan Multimedia',
                'description' => 'Mempelajari dasar desain grafis, antarmuka visual, web dasar, dan teknik multimedia interaktif.',
            ],
        ],
        'experience' => [
            [
                'period' => 'Program Magang / Observasi',
                'institution' => 'Perpustakaan SMK Budi Mulia Ciledug',
                'role' => 'Magang / Proyek Kuliah',
                'bullets' => [
                    'Wawancara & analisis kebutuhan sistem informasi perpustakaan.',
                    'Mendukung pengelolaan operasional dan sirkulasi koleksi perpustakaan.',
                ],
            ],
            [
                'period' => 'Proyek Perkuliahan',
                'institution' => 'Universitas Pamulang',
                'role' => 'Web Developer',
                'bullets' => [
                    'Mengembangkan sistem informasi berbasis web dengan metode Agile.',
                    'Bekerja kolaboratif dalam tim untuk mencapai milestone sprint.',
                ],
            ],
            [
                'period' => 'Juli 2024 – Agustus 2024',
                'institution' => 'Komnas HAM RI - Jakarta Pusat',
                'role' => 'IT Support Magang',
                'bullets' => [
                    'Menyampaikan presentasi atau laporan berkala secara lisan & tertulis.',
                    'Beradaptasi dengan perubahan kebutuhan sistem kerja dan industri.',
                    'Mengoperasikan aplikasi perkantoran terintegrasi (Google Workspace & MS Office).',
                ],
            ],
        ],
    ],

    'goals' => [
        'tag' => "My Goals",
        'title' => "Small Steps, Big Dreams",
        'quote' => '“Bukan tentang siapa yang paling cepat, tapi tentang siapa yang tetap berusaha.”',
        'items' => [
            ['text' => 'Lulus tepat waktu', 'checked' => true],
            ['text' => 'Jadi web developer', 'checked' => true],
            ['text' => 'Bekerja di bidang IT', 'checked' => true],
            ['text' => 'Membanggakan orang tua', 'checked' => true],
            ['text' => 'Hidup mandiri', 'checked' => true],
        ],
    ],

    'contact' => [
        'tag' => "Get In Touch",
        'title' => "Hubungi Saya",
        'description' => "Saya selalu terbuka untuk diskusi, kolaborasi, atau sekadar saling bertukar informasi.",
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
                'value' => '+62 812 3456 7890',
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
