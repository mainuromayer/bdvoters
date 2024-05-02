<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>মো. রুহুল আমিন বাবলু - চেয়ারম্যান পদপ্রার্থী</title>
    <meta name="description"
          content="স্মার্ট পাটগ্রাম উপজেলা বিনির্মাণে, উপজেলা চেয়ারম্যান পদপ্রার্থী মো. রুহুল আমিন বাবলু ভাইকে আনারস মার্কায় ভোট দিন">
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon">
    <!-- <link rel="preload" href="assets/css/font-solaimanlipi/SolaimanLipi.woff2" as="font" type="font/woff2" crossorigin> -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-solaimanlipi/solaimanlipi.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/tatsama-font/tatsama-font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
</head>


<body>
<main class="top-main-wraper">

    <div class="man-top-visible-text">
        <h3 class="text-h3 font-solaimanlipi">স্মার্ট পাটগ্রাম উপজেলা বিনির্মাণে</h3>
        <h1 class="main-big-title font-solaimanlipi">আসন্ন উপজেলা পরিষদ নির্বাচনে<br> পাটগ্রাম উপজেলায়</h1>
    </div>

    <section class="main-container">
        <div class="main-left-container">
            <div class="left-column d-flex align-items-end">
                <img class="img-fluid person-photo" src="{{ asset('frontend/img/user.png') }}" alt="user"/>
            </div>

            <div class="middle-column ps-0 ps-md-15 pe-0 pe-lg-15">
                <div class="middle-content">
                    <div>
                        <div class="man-top-text">
                            <h3 class="text-h3 font-solaimanlipi">স্মার্ট পাটগ্রাম উপজেলা বিনির্মাণে</h3>
                            <h1 class="main-big-title font-solaimanlipi">আসন্ন উপজেলা পরিষদ নির্বাচনে<br> পাটগ্রাম
                                উপজেলায়</h1>
                        </div>
                        <h5 class="data-title font-solaimanlipi">৮ মে ২০২৪, বুধবার</h5>
                    </div>

                    <div class="green-title-name-wrap pb-80 pt-0 pt-xl-60 pb-xl-150">
                        <h5 class="election-designation mb-0 mb-md-0 font-solaimanlipi"><span>উপজেলা</span> <span
                                class="green-big-word">চেয়ারম্যান</span> পদপ্রার্থী</h5>
                        <div class="main-name-wrap">
                            <h5 class="main-name text-start text-md-end font-li-alinur-tatsama-unicode position-relative pb-20 pb-md-30">
                                <span>মো. রুহুল আমিন বাবলু</span>
                                <span class="gender text-end d-block font-solaimanlipi">ভাইকে</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="right-column">
            <div class="form-top-orange-container">
                <div class="orange-container">
                    <div class="orange-container-wrap">
                        <h3 class="main-designation-title font-li-alinur-tatsama-unicode"><span
                                class="brand">আনারস</span> <span class="slogan">মার্কায় ভোট দিন</span></h3>

                        <div class="logo-container">
                            <img class="w-auto img-fluid" src="{{ asset('frontend/img/logo.png') }}" alt="logo">
                        </div>

                        <img class="line-design" src="{{ asset('frontend/img/line.png') }}" alt="line">
                    </div>
                </div>

                <section class="blue-bg"></section>
            </div>


            <div class="search-form-wrap">
                <!-- <h4 class="search-form-header">আপনার ভোট কেন্দ্রের নাম জানতে আপনার তথ্য বাংলায় প্রদান করুন</h4> -->
                <h4 class="search-form-header">আপনার তথ্য বাংলায় প্রদান করুন</h4>
                <h6 class="search-form-subheader">অনুসন্ধানের জন্য ইউনিয়ন পূরণ করা বাধ্যতামূলক</h6>

                <div class="filed-container">
                    <form class="elc-info-form">
                        <div class="mb-20">
                            <label class="label" for="name">নাম (অথবা নামের অংশ):</label>
                            <input class="input-field" type="text" name="name" value="">
                        </div>
                        <div class="mb-20">
                            <label class="label" for="name">পিতার নাম (অথবা নামের অংশ):</label>
                            <input class="input-field" type="text" name="fathers_name" value="">
                        </div>
                        <div class="mb-20">
                            <label class="label" for="dob">জন্ম তারিখ (দিন/মাস/বছর)</label>
                            <input class="input-field" type="text" placeholder="জন্ম তারিখ (০১/০১/১৯৯৫)" id="dob"
                                   name="dob" value="">
                        </div>
                        <div>
                            <label class="label" for="union_no">ইউনিয়ন:<span class="require">*</span></label>
                            <div class="select-dropdown" id="select_union_no">
                                <select class="selector-wrap" name="union_no" id="union_no" required>
                                    <option value="">ইউনিয়ন সিলেক্ট করুন</option>
                                    <!DOCTYPE html>
                                    <html>

                                    <head>
                                        <meta charset="UTF-8">
                                        <!-- <title>Error Page</title>
                                        <link rel="stylesheet" type="text/css" href="https://bdvoters.com/assets/css/error.css"> -->
                                    </head>

                                    <body>
                                    <!-- <div class="container">
                                        <div class="error-code"></div>
                                        <div class="error-message">Warning: Undefined array key "union_no" in /home/1255963.cloudwaysapps.com/yxrkvqyfgt/public_html/app/views/voter-info/form.php on line 36</div>
                                        <a href="/" class="error-back">Go Back Home</a>
                                    </div> -->
                                    </body>

                                    </html>
                                    <option value="2"> দহগ্রাম</option>
                                </select>
                            </div>
                        </div>

                        <div id="ward-list-div"></div>

                        <button type="button" class="submit-btn mt-20">অনুসন্ধান</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="orange-container">
        <div class="orange-container-wrap">
            <h3 class="main-designation-title"><span class="brand">আনারস</span> <span class="slogan">মার্কায় ভোট দিন</span></h3>

            <div class="logo-container">
                <img src="assets/img/logo.png" alt="">
            </div>

            <img class="line-design" src="assets/img/line.png" alt="">
        </div>
    </section> -->

    <section class="main-orange-container">
        <div class="orange-container">
            <div class="orange-container-wrap">
                <h3 class="main-designation-title font-li-alinur-tatsama-unicode"><span class="brand">আনারস</span> <span
                        class="slogan">মার্কায় ভোট দিন</span></h3>

                <div class="logo-container">
                    <img class="w-auto img-fluid" src="{{ asset('frontend/img/logo.png') }}" alt="logo">
                </div>

                <img class="line-design" src="{{ asset('frontend/img/line.png') }}" alt="line">
            </div>
        </div>
        <section class="blue-bg"></section>
    </section>

    <section class="responsive-bottom-form">
    </section>
</main>

<!-- <div id="phoneNumberInfo" class="modal fade">
        modal content goes here
</div> -->

<div id="voterList">

</div>

<footer class="footer-container">
    <!-- <section class="footer-wrap">Developed by <span class="logo">Coders</span>Bucket</section> -->
    <section class="footer-wrap font-solaimanlipi">যোগাযোগ: <a class="text-decoration-none" href="tel:01330003717">০১৩৩০০০৩৭১৭</a>,
        <a class="text-decoration-none" href="tel:01330003718">০১৩৩০০০৩৭১৮</a></section>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="{{ asset('frontend/js/bundle.js') }}"></script>
<script src="{{ asset('frontend/js/custom-script.js') }}"></script>
</body>

</html>
