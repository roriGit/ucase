@extends('layouts.app')
@section('content')

    <header class="header" style="background-color: var(--case-yellow);">
        <div class="container-1440 center">
            <div class="heading-container">
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
                    class="heading-row-1">
                    <h1><span class="underline-wavey brand-color-2">Loveable</span></h1>
                </div>
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
                    class="heading-row-2">
                    <h1>{{ $phone['model'] }}</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="order-section">
        <div id="w-node-c5a61550-ce24-d36a-df16-785771eb572d-39f69b08" class="w-layout-layout quick-stack wf-layout-layout">
            <div class="w-layout-cell">
                <div data-delay="4000" data-animation="slide" class="gallery-box w-slider" data-autoplay="false"
                    data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
                    data-nav-spacing="3" data-duration="500" data-infinite="true">
                    <div class="w-slider-mask">
                        <div class="slide w-slide">
                            <div class="images-div"><img src="images/ucase---icons-02.png" loading="lazy" width="100"
                                    alt=""></div>
                        </div>
                        <div class="w-slide">
                            <div class="images-div"><img src="images/Case4.png" loading="lazy" width="150" sizes="150px"
                                    alt="" srcset="images/Case4-p-500.png 500w, images/Case4.png 644w"></div>
                        </div>
                        <div class="w-slide">
                            <div class="images-div"><img src="images/Case-collage-2-pics.png" loading="lazy" width="150"
                                    sizes="150px" alt=""
                                    srcset="images/Case-collage-2-pics-p-500.png 500w, images/Case-collage-2-pics-p-800.png 800w, images/Case-collage-2-pics.png 960w">
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="images-div"><img src="images/Case-collage-6-pics.png" loading="lazy" width="150"
                                    sizes="150px" alt=""
                                    srcset="images/Case-collage-6-pics-p-500.png 500w, images/Case-collage-6-pics-p-800.png 800w, images/Case-collage-6-pics.png 960w">
                            </div>
                        </div>
                    </div>
                    <div class="left-arrow-2 w-slider-arrow-left">
                        <div class="w-icon-slider-left"></div>
                    </div>
                    <div class="right-arrow-2 w-slider-arrow-right">
                        <div class="w-icon-slider-right"></div>
                    </div>
                    <div class="slide-nav-2 w-slider-nav w-round w-num"></div>
                </div>
            </div>
            <div class="w-layout-cell cell">
                <div class="details-div">
                    <div class="w-form">
                        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get"
                            data-wf-page-id="6901c67e43a730e139f69b08"
                            data-wf-element-id="edf8cf6a-a0c2-8132-9497-3913918d6924"><label for="name">Let&#x27;s upload
                                some pics</label><label for="name" class="upload">Upload image</label><label for="name"
                                class="upload">Upload image</label><label for="name" class="upload">Upload
                                image</label><label for="name" class="upload">Upload image</label><label for="name"
                                class="upload">Upload image</label><label for="name">iPhone type</label><select
                                id="Phone-case-types" name="Phone-case-types" data-name="Phone case types" required=""
                                class="select-field-2 w-select">
                                <option value="Another option">Phone case type...</option>
                                <option value="">iPhone 12</option>
                                <option value="First">iPhone 13</option>
                                <option value="Second">iPhone 14</option>
                                <option value="Third">iPhone 15</option>
                                <option value="Another option">iPhone 16</option>
                            </select><label for="email">Price: R250.00</label>
                            <a href="#" class="button w-button">Next step</a>
                        </form>`
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    document.body.className = '';
</script>