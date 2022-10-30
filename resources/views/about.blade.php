@extends('layouts.main')

@section('container')


<!-- <h1>Form Biodata Diri</h1>

<h3>{{ $name }}</h3>
<img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
<p>{{ $email }}</p>
<h5>{{ $alamat }}</h5> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <section>
                <img src="{{ $image }}" alt="{{ $name }}" width="250" class="img-thumbnail rounded-circle">
            </section>
            <section>
                <h3>Kontak</h3>
                <div>
                    <h6>Telepon: <span class="text-secondary">+62 82172519703</span></h6>
                    <h6>Email : <span class="text-secondary">adamanino777@gmail.com</span></h6>
                    <h6>Alamat : <span class="text-secondary">JL. Masjid At-Taqwa Badean Blimbingsari</span></h6>
                </div>
            </section>
            <section>
                <h3>Pendidikan</h3>
                <div>
                    <h6>2010-2015</h6>
                    <h6>SDN 3 Badean</h6>
                    <h6>2015-2018</h6>
                    <h6>MTS NURUL HUDA Banyuwangi</h6>
                    <h6>2018-2021</h6>
                    <h6>MA NURUL HUDA Banyuwangi</h6>
                </div>
                <div>
                    <h6>2021-2022</h6>
                    <h6>Politeknik Negeri Banyuwangi</h6>
                    <p>D-IV Teknologi Rekayasa Perangkat Lunak</p>
                </div>
            </section>
        </div>
        <div class="col-8">
            <section>
                <h1>Faqihul Muqoddam</h1>
            </section>
            <section>
                <h3>Tentang Saya</h3>
                    Jangan lupa bersyukur, Bisa jadi kehidupanmu sekarang adalah kehidupan yang dimpimikan orang lain.</p>
            </section>
            <section>
                <h3>Pengalaman Kerja</h3>
                <div>
                    <h6 class="mb-4">Freelance Wedding Photoghraphy</h6>
                    <p>Part of Ezzastory.</p>
                    <h6>2018 - Sekarang</h6>
                </div>
                <div>
                    <h6 class="mb-4">Web Designer UI/UX</h6>
                    <h6>2021 - Sekarang</h6>
                    <p>Merancang dan mengembangkan tampilan website
                        yang fungsionalitas serta optimalisasi website.</p>
                </div>
                 <section>
                <h3>My Skills</h3>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Web Design</h6>
                        <h6 class="font-weight-bold">50%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Videography</h6>
                        <h6 class="font-weight-bold">50%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Photography</h6>
                        <h6 class="font-weight-bold">70%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </section>
            </section>
        </div>
    </div>
</div>

@endsection