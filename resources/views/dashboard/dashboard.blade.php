@extends('layouts.default')

@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-8 mx-auto">
                    <h1 class="text-center">Cloud Hosting</h1>
                    <h1 class="text-center">untuk</h1>
                    <h2 class="text-center" style="color: #ff6d0b">Kesuksesan Websitemu!</h2>
                    <div class="text-detail text-center mt-0">
                        Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, <br>
                        dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda. <br>
                        Tersertifikasi ISO 27001 dengan Data Center Tier 3.
                    </div>

                    <h6 class="text-center mt-3" style="color: #ff6d0b">#QwordsYourSuccess</h6>
                    <center><button class="form-control" type="submit" id="scrollToMyTabContent">Pesan Sekarang</button>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-section" id="section_2">
        <div class="container pt-2">
            <h3 class="text-white text-center mt-5">Cari Nama Domainmu</h3>
            <div class="text-white text-center mt-0">
                Nama Domain digunakan untuk mempermudah pengunjung menuju ke <br>
                situs Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, <br>
                atau layanan anda.
            </div>

            <form method="get" class="custom-form mt-2 pt-2" role="search">
                <div class="input-group input-group-lg mb-5">
                    <span class="input-group-text bi-search" id="basic-addon1">
                    </span>
                    <input name="keyword" type="search" class="form-control" id="keyword"
                        placeholder="Cari nama domain Anda" aria-label="Search">

                    <button type="submit" class="form-control">Cari</button>
                </div>
            </form>

            <div class="discount-box pt-5 pb-0">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="d-flex flex-wrap mt-5 mb-0 justify-content-around justify-content-lg-center gap-4">
                            <div class="fw-bold text-white">
                                .com
                            </div>
                            <h3 class="fw-bold text-white">Rp 165.000</h3>

                            <div class="d-none d-sm-block vr" style="color: white; transform: scale(2);"></div>

                            <div class="fw-bold text-white">
                                .id
                            </div>
                            <h3 class="fw-bold text-white">Rp 225.000</h3>

                            <div class="d-none d-sm-block vr" style="color: white; transform: scale(2);"></div>

                            <div class="fw-bold text-white">
                                .info
                            </div>
                            <h3 class="fw-bold text-white">Rp 77.000</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="featured-card">
        <div class="container-fluid pt-5 mt-5 mb-5">
            <div class="row text-center justify-content-center">
                <div class="col-12 col-lg-8 ">
                    <h2 class="mb-4">
                        Cloud Hosting Indonesia
                        <span class="text-qw-primary" style="color:#ff6d0b">Diskon Hingga 50%</span>
                    </h2>
                    <div class="text-center mt-0" style="font-size: 18px">
                        Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website Anda
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                            aria-labelledby="design-tab" tabindex="0">
                            <div class="row">

                                <div class="col-12 col-sm-6 col-lg-3 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h7 class="mb-2">Value Cloud Hosting</h7>
                                                    <h5 class="mb-2">VCH1</h6>
                                                        <s class="text-muted">Rp 24.500</s>
                                                        <p class="fw-bold text-qw-primary pricehome">Rp 14.500</p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mt-3">
                                                <div class="icon-wrapper me-3 mb-2">
                                                    <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                        loading="lazy"
                                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                        alt="disk.webp" width="36px" height="36px"
                                                        data-ll-status="loaded"
                                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                            alt="disk.webp" width="36px" height="36px" /></noscript>
                                                </div>
                                                <div class="label-spec">
                                                    <div>Disk</div>
                                                    <p class="fw-bold spechome">3 GB</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">

                                                <div class="icon-wrapper me-3 mb-2">
                                                    <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                        loading="lazy"
                                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                        alt="Bandwidth.webp" width="36px" height="36px"
                                                        data-ll-status="loaded"
                                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                            alt="Bandwidth.webp" width="36px"
                                                            height="36px" /></noscript>
                                                </div>
                                                <div class="label-spec">
                                                    <div>Bandwith</div>
                                                    <p class="fw-bold spechome">Unlimited</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">

                                                <div class="icon-wrapper me-3 mb-2">
                                                    <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                        loading="lazy"
                                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                        alt="core.webp" width="36px" height="36px"
                                                        data-ll-status="loaded"
                                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                            alt="core.webp" width="36px" height="36px" /></noscript>
                                                </div>
                                                <div class="label-spec">
                                                    <div>Core CPU</div>
                                                    <p class="fw-bold spechome">0.5 Core</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">

                                                <div class="icon-wrapper me-3 mb-2">
                                                    <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                        loading="lazy"
                                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                        alt="addon.webp" width="36px" height="36px"
                                                        data-ll-status="loaded"
                                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                            alt="addon.webp" width="36px" height="36px" /></noscript>
                                                </div>
                                                <div class="label-spec">
                                                    <div>Addon / parked domain</div>
                                                    <p class="fw-bold spechome">No</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-grid mt-auto">
                                            <a href="https://portal.qwords.com/order/?pid=634&amp;billingcycle=annually"
                                                class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h7 class="mb-2">Unlimited Hosting</h7>
                                                    <h5 class="mb-2">Signature</h5>
                                                    <s class="text-muted">Rp 109.000</s>
                                                    <p class="fw-bold text-qw-primary pricehome">Rp 89.900</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-flex align-items-center mt-3">
                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                    alt="disk.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                        alt="disk.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Disk</div>
                                                <p class="fw-bold spechome">Unlimited</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                    alt="Bandwidth.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                        alt="Bandwidth.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Bandwith</div>
                                                <p class="fw-bold spechome">Unlimited</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                    alt="core.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                        alt="core.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Core CPU</div>
                                                <p class="fw-bold spechome">1 Core</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                    alt="addon.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                        alt="addon.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Addon / parked domain</div>
                                                <p class="fw-bold spechome">5 / 5</p>
                                            </div>
                                        </div>
                                        <div class="d-grid mt-auto">
                                            <a href="https://portal.qwords.com/order/?pid=634&amp;billingcycle=annually"
                                                class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h7 class="mb-2">High Performance</h7>
                                                    <h5 class="mb-2">HPCH Bisnis 1</h5>
                                                    <s class="text-muted">Rp 90.000</s>
                                                    <p class="fw-bold text-qw-primary pricehome">Rp 79.000</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-flex align-items-center mt-3">
                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                    alt="disk.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                        alt="disk.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Disk</div>
                                                <p class="fw-bold spechome">3 GB</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                    alt="Bandwidth.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                        alt="Bandwidth.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Bandwith</div>
                                                <p class="fw-bold spechome">Unlimited</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                    alt="core.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                        alt="core.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Core CPU</div>
                                                <p class="fw-bold spechome">1 Core</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                    alt="addon.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                        alt="addon.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Addon / parked domain</div>
                                                <p class="fw-bold spechome">-</p>
                                            </div>
                                        </div>
                                        <div class="d-grid mt-auto">
                                            <a href="https://portal.qwords.com/order/?pid=634&amp;billingcycle=annually"
                                                class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h7 class="mb-2">Cloud VPS KVM SSD</h7>
                                                    <h5 class="mb-2">VPS SC1</h6>
                                                        <s class="text-muted">Rp 135.000</s>
                                                        <p class="fw-bold text-qw-primary pricehome">Rp 75.000</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-flex align-items-center mt-3">
                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                    alt="disk.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                        alt="disk.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Disk</div>
                                                <p class="fw-bold spechome">25 GB</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                    alt="Bandwidth.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/bandwidth.webp"
                                                        alt="Bandwidth.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Bandwith</div>
                                                <p class="fw-bold spechome">Unlimited</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                    alt="core.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/cpu.webp"
                                                        alt="core.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Core CPU</div>
                                                <p class="fw-bold spechome">1 Core</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3">

                                            <div class="icon-wrapper me-3 mb-2">
                                                <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                    loading="lazy"
                                                    data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                    alt="addon.webp" width="36px" height="36px"
                                                    data-ll-status="loaded"
                                                    class="entered litespeed-loaded"><noscript><img loading="lazy"
                                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/addon.webp"
                                                        alt="addon.webp" width="36px" height="36px" /></noscript>
                                            </div>
                                            <div class="label-spec">
                                                <div>Addon / parked domain</div>
                                                <p class="fw-bold spechome">-</p>
                                            </div>
                                        </div>
                                        <div class="d-grid mt-auto">
                                            <a href="https://portal.qwords.com/order/?pid=634&amp;billingcycle=annually"
                                                class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-area">
        <div class="container py-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 mt-5 py-5">
                    <div class="section-title text-center pb-25">
                        <h2 class="title-why">Mengapa Harus Qwords?</h2>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row justify-content-center mt-70">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                <path fill="#ff6d0b"
                                    d="M2 12C2 6.477 6.477 2 12 2a9.985 9.985 0 0 1 8 4V3.5h2v6h-4.834c.212.368.334.795.334 1.25v2.5a2.5 2.5 0 0 1-5 0v-2.5A2.5 2.5 0 0 1 16 8.458V7.5h2.616A8 8 0 1 0 20 12h2c0 5.523-4.477 10-10 10S2 17.523 2 12Zm13-2.25a1 1 0 0 0-1 1v2.5a1 1 0 1 0 2 0v-2.5a1 1 0 0 0-1-1Zm-5.625 3a.625.625 0 1 1 0 1.25H6.75v1.5h2.625a2.125 2.125 0 0 0 1.62-3.5a2.125 2.125 0 0 0-1.62-3.5H6.75V10h2.625a.625.625 0 1 1 0 1.25H7.5v1.5h1.875Z" />
                            </svg>
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>Garansi 30 Hari Uang Kembali</strong>
                        </div>
                        <div class="why-desc mt-2">
                            Menawarkan garansi uang kembali selama 30 hari setelah aktivasi hosting untuk memastikan
                            kepuasan pelanggan.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path fill="#ff6d0b"
                                        d="M18.243 14.03a1 1 0 0 1 .727 1.213L18.28 18H19v-1a1 1 0 1 1 2 0v1a1 1 0 1 1 0 2v1a1 1 0 1 1-2 0v-1h-2a1 1 0 0 1-.97-1.242l1-4a1 1 0 0 1 1.212-.728ZM13.5 14a2.5 2.5 0 0 1 2.495 2.336L16 16.5v.325c0 .6-.19 1.181-.541 1.663l-.14.175L14.175 20H15a1 1 0 0 1 .117 1.993L15 22h-3a1 1 0 0 1-.837-1.548l.078-.103l2.56-2.987a.825.825 0 0 0 .19-.42l.009-.117V16.5a.5.5 0 0 0-1 0a1 1 0 1 1-2 0a2.5 2.5 0 0 1 2.5-2.5ZM12 3c4.195 0 7.717 2.87 8.716 6.75a1 1 0 1 1-1.937.5A7 7 0 1 0 8.5 18.064a1 1 0 0 1-1 1.73A9 9 0 0 1 12 3Zm0 4a1 1 0 0 1 .993.883L13 8v4a1 1 0 0 1-.883.993L12 13h-2a1 1 0 0 1-.117-1.993L10 11h1V8a1 1 0 0 1 1-1Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>Layanan 24/7</strong>
                        </div>
                        <div class="why-desc mt-2">
                            Tim Technical Support dan Customer Service Qwords siap membantu kapan saja melalui Live chat,
                            Call Center, dan Support Ticket.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                viewBox="0 0 1696 1536">
                                <path fill="#ff6d0b"
                                    d="M1671 350q40 57 18 129l-275 906q-19 64-76.5 107.5T1215 1536H292q-77 0-148.5-53.5T44 1351q-24-67-2-127q0-4 3-27t4-37q1-8-3-21.5t-3-19.5q2-11 8-21t16.5-23.5T84 1051q23-38 45-91.5t30-91.5q3-10 .5-30t-.5-28q3-11 17-28t17-23q21-36 42-92t25-90q1-9-2.5-32t.5-28q4-13 22-30.5t22-22.5q19-26 42.5-84.5T372 283q1-8-3-25.5t-2-26.5q2-8 9-18t18-23t17-21q8-12 16.5-30.5t15-35t16-36t19.5-32T504.5 12t36-11.5T588 6l-1 3q38-9 51-9h761q74 0 114 56t18 130l-274 906q-36 119-71.5 153.5T1057 1280H188q-27 0-38 15q-11 16-1 43q24 70 144 70h923q29 0 56-15.5t35-41.5l300-987q7-22 5-57q38 15 59 43zm-1064 2q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5T1279 352l21-64q4-13-2-22.5t-20-9.5H670q-13 0-25.5 9.5T628 288zm-83 256q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5T1196 608l21-64q4-13-2-22.5t-20-9.5H587q-13 0-25.5 9.5T545 544z" />
                            </svg>
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>Panduan Manual Lengkap</strong>
                        </div>
                        <div class="why-desc mt-2">
                            Qwords menyediakan halaman knowledge base dengan tutorial dan tips terkait pengelolaan website
                            dan hosting.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                <path fill="#ff6d0b"
                                    d="m12 .44l10 3.5V12c0 4.127-2.533 7.012-4.896 8.803a19.744 19.744 0 0 1-4.65 2.595a6.99 6.99 0 0 1-.087.033l-.025.009l-.007.002l-.003.001c-.001 0-.002 0-.332-.943l-.331.944h-.001l-.003-.002l-.007-.002l-.025-.01a12.165 12.165 0 0 1-.398-.155a19.749 19.749 0 0 1-4.34-2.473C4.535 19.013 2 16.128 2 12.001V3.94l10-3.5Zm0 22.06l-.331.944l.331.116l.331-.116L12 22.5Zm0-1.072l.009-.004a17.755 17.755 0 0 0 3.887-2.215C18.034 17.59 20 15.223 20 12V5.36l-8-2.8l-8 2.8V12c0 3.223 1.966 5.588 4.104 7.21A17.75 17.75 0 0 0 12 21.428Zm6.072-13.085l-7.071 7.071l-4.243-4.242l1.415-1.415L11 12.586l5.657-5.657l1.414 1.414Z" />
                            </svg>
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>Jaminan Keamanan</strong>
                        </div>
                        <div class="why-desc mt-2">
                            Keamanan adalah fokus utama di Qwords, dengan tindakan pemantauan dan pencegahan standar dan
                            berkelanjutan.
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mt-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <img data-lazyloaded="1" data-placeholder-resp="100pxx100px"
                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp "
                                loading="lazy"
                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp "
                                alt="paket hosting Indonesia dengan up time 99.99%" width="60px" height="60px"
                                data-ll-status="loaded" class="entered litespeed-loaded">
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>Up time & Tier 1 Network</strong>
                        </div>
                        <div class="why-desc mt-2">
                            Uptime Network & Server di atas 99.99%, manajemen jaringan canggih, dan Tier 1 Network tanpa
                            transit untuk kecepatan maksimal dan ketersediaan backup.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <img data-lazyloaded="1" data-placeholder-resp="100pxx100px"
                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp"
                                loading="lazy"
                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp"
                                alt="Clustered DNS" width="60px" height="60px" data-ll-status="loaded"
                                class="entered litespeed-loaded">
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>Clustered DNS</strong>
                        </div>
                        <div class="why-desc mt-2">
                            DNS Server Qwords terhubung dan saling membackup satu sama lain untuk ketersediaan yang optimal.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <img data-lazyloaded="1" data-placeholder-resp="100pxx100px"
                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp"
                                loading="lazy"
                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp"
                                alt="High
						Enterprise Server" width="60px" height="60px" data-ll-status="loaded"
                                class="entered litespeed-loaded">
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>High Enterprised Server</strong>
                        </div>
                        <div class="why-desc mt-2">
                            Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core, merupakan hardware
                            kelas terbaik.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="why-style" style="background-color: #fff8f3">
                        <div class="icon-why text-center mb-2">
                            <img data-lazyloaded="1" data-placeholder-resp="100pxx100px"
                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp"
                                loading="lazy"
                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp"
                                alt="Peering
						Network" width="60px" height="60px" data-ll-status="loaded"
                                class="entered litespeed-loaded">
                        </div>
                        <div class="why-detail text-center mt-20">
                            <strong>Peering Network</strong>
                        </div>
                        <div class="why-desc mt-2">
                            Terhubung langsung ke public peering seperti OpenIXP dan CDIX, mengurangi latency atau waktu
                            tunggu pengiriman data.
                        </div>
                    </div>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
        </div>
    </section>


    <section id="section_layanan" style="background-color: #fff8f3">
        <div class="container-fluid">
            <div class="row text-center justify-content-center">
                <div class="col-12 col-lg-8 py-5 mt-5">
                    <h2 class="mb-0">
                        Lihat Juga Layanan Kami Yang Lain
                    </h2>
                    <div class="text-center mt-3" style="font-size: 18px">
                        Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row mb-5">
                <div class="col-12 mb-5">
                    <div class="row justify-content-center">
                        <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                            aria-labelledby="design-tab" tabindex="0">
                            <div class="row">

                                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="card-heading d-flex align-items-center mb-3">
                                                        <div class="icon-wrapper me-2">
                                                            <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                loading="lazy"
                                                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                alt="ssl.webp" width="36px" height="36px"
                                                                data-ll-status="loaded"
                                                                class="entered litespeed-loaded"><noscript><img
                                                                    loading="lazy"
                                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                    alt="ssl.webp" width="36px"
                                                                    height="36px" /></noscript>
                                                        </div>
                                                        <h5 class="mb-0 fw-bold h5home">SSL</h5>
                                                    </div>
                                                    <p>Jadikan website Anda lebih terpercaya dan disukai oleh search engine
                                                        dengan menggunakan SSL Certificate.</p>
                                                    <br>
                                                    <p>Mulai dari</p>
                                                </div>
                                            </div>
                                            <p class="text-qw-primary fw-bold pricehome">Rp. 112.000<span
                                                    class="fs-6 text-dark fw-light"> / tahun</span></p>
                                        </a>
                                        <div class="d-grid mt-auto">
                                            <a href="https://www.qwords.com/v2/services/secured-sockets-layer-certificate/"
                                                class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="card-heading d-flex align-items-center mb-3">
                                                        <div class="icon-wrapper me-2">
                                                            <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                loading="lazy"
                                                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                alt="ssl.webp" width="36px" height="36px"
                                                                data-ll-status="loaded"
                                                                class="entered litespeed-loaded"><noscript><img
                                                                    loading="lazy"
                                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                    alt="ssl.webp" width="36px"
                                                                    height="36px" /></noscript>
                                                        </div>
                                                        <h5 class="mb-0 fw-bold h5home">Dedicated Server</h5>
                                                    </div>
                                                    <p>Jadikan website Anda lebih terpercaya dan disukai oleh search engine
                                                        dengan menggunakan SSL Certificate.</p>
                                                    <br>
                                                    <p>Mulai dari</p>
                                                </div>
                                            </div>
                                            <p class="text-qw-primary fw-bold pricehome">Rp. 112.000<span
                                                    class="fs-6 text-dark fw-light"> / tahun</span></p>
                                        </a>
                                        <div class="d-grid mt-auto">
                                            <a href="https://www.qwords.com/v2/services/secured-sockets-layer-certificate/"
                                                class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="card-heading d-flex align-items-center mb-3">
                                                        <div class="icon-wrapper me-2">
                                                            <img data-lazyloaded="1" data-placeholder-resp="36pxx36px"
                                                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                loading="lazy"
                                                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                alt="ssl.webp" width="36px" height="36px"
                                                                data-ll-status="loaded"
                                                                class="entered litespeed-loaded"><noscript><img
                                                                    loading="lazy"
                                                                    src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                                    alt="ssl.webp" width="36px"
                                                                    height="36px" /></noscript>
                                                        </div>
                                                        <h5 class="mb-0 fw-bold h5home">Colocation Server</h5>
                                                    </div>
                                                    <p>Jadikan website Anda lebih terpercaya dan disukai oleh search engine
                                                        dengan menggunakan SSL Certificate.</p>
                                                    <br>
                                                    <p>Mulai dari</p>
                                                </div>
                                            </div>
                                            <p class="text-qw-primary fw-bold pricehome">Rp. 112.000<span
                                                    class="fs-6 text-dark fw-light"> / tahun</span></p>
                                        </a>
                                        <div class="d-grid mt-auto">
                                            <a href="https://www.qwords.com/v2/services/secured-sockets-layer-certificate/"
                                                class="btn btn-cta rounded-5">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
    </section>

    <section id="bw-ads">
        <div class="container-fluid mt-5 py-5">
            <div class="bw-ads-banner py-5 px-2">
                <div class="row align-items-center justify-content-evenly">
                    <div class="col-6 col-sm-5 col-lg-3 col-xxl-3 mb-3 mb-lg-0">
                        <div class="img-wrapper mx-auto">
                            <img data-lazyloaded="1" data-placeholder-resp="365pxx350px"
                                src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/bw.webp"
                                loading="lazy"
                                data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/bw.webp"
                                alt="Jasa pembuatan website profesional" width="365px" height="350px"
                                data-ll-status="loaded" class="entered litespeed-loaded">
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-7 col-xxl-5 mb-4 mb-lg-0">
                        <h2>
                            Bikin website impian dengan
                            mudah disini hanya 1jutaan
                        </h2>
                        <p class="my-3">
                            Bikin website impian include paket hosting Indonesia terbaik hanya 1
                            jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis
                            &amp; UKM. Bikin Website Impian dengan mudah di sini, desain website
                            elegan dan mudah dikelola
                        </p>
                        <a href="https://bikin.website/" class="btn btn-cta rounded-5 fw-bold px-3">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="testimonial-area" >
        <div class="container-fluid py-5 mt-5">
            <div class="row text-center justify-content-center">
                <div class="col-12 col-lg-8 ">
                    <h2 class="mb-0">
                        Testimoni
                    </h2>
                    <div class="text-center mt-3" style="font-size: 18px">
                        Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords?
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial-slider">
            <div class="row testimonial-item mt-4">
                <div class="col-lg-8 mx-auto align-items-center">
                    <div class="header-quote text-center">
                        <h5>
                            Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan
                            layanan yang terbaik dari Qwords.
                        </h5>
                    </div>
                    <div class="quote-details text-center">
                        <p class="fst-italic">
                            Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa
                            informasi
                            keamanan di Indonesia. Oleh
                            karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan
                            hosting
                            yang selalu up selama 24 jam.
                        </p>
                    </div>
                    <div class="author-name ms-5 text-center">
                        <h6 class="d-inline me-3">Budi Raharjo</h6>
                        <span class="small text-muted">Founder ID Cert</span>

                    </div>
                </div>
            </div>

            <div class="row testimonial-item mt-4">
                <div class="col-lg-8 mx-auto align-items-center pb-4">
                    <div class="header-quote text-center">
                        <h5>
                            Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu
                            website kami kembali normal. Terbaik pokoknya, mah!
                        </h5>
                    </div>
                    <div class="quote-details text-center">
                        <p class="fst-italic">
                            Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai
                            rumah
                            informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah
                            menggunakan dukungan dari Qwords.
                        </p>
                    </div>
                    <div class="author-name ms-5 text-center">
                        <h6 class="d-inline me-3">Kuns Kurniawan</h6>
                        <span class="small text-muted">PR Event Info BDG</span>

                    </div>
                </div>

            </div>

            <div class="row testimonial-item mt-4">
                <div class="col-lg-8 mx-auto align-items-center">
                    <div class="header-quote text-center">
                        <h5>
                            Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang
                            diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin
                            berpindah
                            dari Qwords.
                        </h5>
                    </div>
                    <div class="quote-details text-center">
                        <p class="fst-italic">
                            Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan
                            website.
                            Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords.
                        </p>
                    </div>
                    <div class="author-name ms-5 text-center">
                        <h6 class="d-inline me-3">Denden Sofiudin</h6>
                        <span class="small text-muted">Owner Rumah Kopi temanggung</span>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="customer-partner" >
        <div class="container-fluid py-5 mt-5">
            <div class="row justify-content-center mb-3 mb-lg-5">
                <div class="col-12 text-center mb-3 mb-lg-5">
                    <h2 class="mb-0">Pelanggan Aktif</h2>
                </div>
                <div class="col-12 text-center">
                    <div class="image-list">
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp" alt="Cimory" width="126px" height="auto" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp" alt="Cimory" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp" alt="Forisa" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp" alt="Forisa" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp" alt="Elsheskin" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp" alt="Elsheskin" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp" alt="Icon +" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp" alt="Icon +" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp" alt="Horison" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp" alt="Horison" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp" alt="MD Pictures" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp" alt="MD Pictures" width="126px" height="auto" /></noscript>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-3 pt-lg-5 pb-5 mb-5">
                <div class="col-12 text-center mb-3 mb-lg-4">
                    <h2 class="mb-0">Partner Kami</h2>
                </div>
                <div class="col-12 text-center">
                    <div class="image-list">
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Google.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Google.webp" alt="Google Cloud" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Google.webp" alt="Google Cloud" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Cpanel.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Cpanel.webp" alt="Cpanel" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Cpanel.webp" alt="Cpanel" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Idea.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Idea.webp" alt="Idea" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Idea.webp" alt="Idea" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Archi.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Archi.webp" alt="Archi" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Archi.webp" alt="Archi" width="126px" height="auto" /></noscript>
                        <img data-lazyloaded="1" data-placeholder-resp="200pxx85px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/dotid.webp" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/dotid.webp" alt="dotid" width="126px" height="auto" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/dotid.webp" alt="dotid" width="126px" height="auto" /></noscript>
                    </div>
                    <a href="https://qwords.com/v2/about-qwordscom/partner/" class="text-qw-primary fw-bold text-decoration-none mt-2">Lihat Semua Partner
                        <img data-lazyloaded="1" data-placeholder-resp="20pxx20px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" loading="lazy" class="ms-3 entered litespeed-loaded" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="Right.webp" width="20px" height="20px" data-ll-status="loaded"><noscript><img loading="lazy" class="ms-3" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Right.webp" alt="Right.webp" width="20px" height="20px" /></noscript>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-ft">
        <div class="container-fluid d-flex align-items-center">
            <div class="contact-wrapper mx-auto py-5">
                <div class="contact-text text-center">
                    <h2 class="mb-0">Butuh <span class="text-qw-primary">Bantuan?</span>
                    </h2>
                    <p class="fw-normal mt-3" style="font-size: 18px">Kami siap membantu anda 24 Jam</p>
                    <div class="contact-list d-flex gap-2 flex-wrap align-items-center justify-content-start justify-content-md-start justify-content-lg-center mt-3 mt-lg-5 px-3">
                        <a href="tel:+628041808888">
                        <div class="contact-col d-flex align-items-center mb-3">
                            <img data-lazyloaded="1" data-placeholder-resp="30pxx30px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" alt="phone.webp" class="me-2 entered litespeed-loaded" width="30px" height="30px" data-ll-status="loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" alt="phone.webp" class="me-2" width="30px" height="30px"/></noscript>
                            <p class="mb-0 h6home">0804-1-808-888</p>
                        </div>
                        </a>
                        <a href="tel:02139708800">
                        <div class="contact-col d-flex align-items-center mb-3">
                            <img data-lazyloaded="1" data-placeholder-resp="30pxx30px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" alt="phone2.webp" class="me-2 entered litespeed-loaded" width="30px" height="30px" data-ll-status="loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg" alt="phone2.webp" class="me-2" width="30px" height="30px"/></noscript>
                            <p class="mb-0 h6home">021 39708800</p>
                        </div>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=62817437111">
                        <div class="contact-col d-flex align-items-center mb-3">
                            <img data-lazyloaded="1" data-placeholder-resp="30pxx30px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/waAlt.svg" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/waAlt.svg" alt="Whatsapp.webp" class="me-2 entered litespeed-loaded" width="30px" height="30px" data-ll-status="loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/waAlt.svg" alt="Whatsapp.webp" class="me-2" width="30px" height="30px"/></noscript>
                            <p class="mb-0 h6home">+6281 7437 111 ( WhatsApp only )</p>
                        </div>
                        </a>
                        <a href="mailto:info@qwords.com">
                        <div class="contact-col d-flex align-items-center mb-3">
                            <img data-lazyloaded="1" data-placeholder-resp="30pxx30px" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/emailAlt.svg" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/emailAlt.svg" alt="Email.webp" class="me-2 entered litespeed-loaded" width="30px" height="30px" data-ll-status="loaded"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/emailAlt.svg" alt="Email.webp" class="me-2" width="30px" height="30px"/></noscript>
                            <p class="mb-0 h6home">info@qwords.com</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@push('script')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        document.getElementById('scrollToMyTabContent').addEventListener('click', function() {
            // Scroll to the #myTabContent section
            document.getElementById('featured-card').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.testimonial-slider').slick({
                dots: true, // Tampilkan navigasi titik (opsional)
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        });
    </script>
@endpush
