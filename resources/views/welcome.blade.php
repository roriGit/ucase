@extends('layouts.app')
@section('content')
  <header data-w-id="bea9b7ed-f748-980a-924e-d39fafb4bf59" class="homepage-header">
    <div class="container-1440 full-width">
      <div class="heading-container">
        <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c3113f" class="heading-row-1">
          <h1 class="headline tilt-left"><span class="spark-left">Hey U!</span></h1>
          <h1 class="headline">Ready to personalise</h1>
        </div>
        <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c31144" class="heading-row-2">
          <h1 class="headline tilt-right">your phone?</h1>
        </div>
      </div>
      <div class="home-header-images-grid"><img class="header-photo-left-2" src="images/3Case6---huawei-2.png"
          width="257.5" alt="" sizes="(max-width: 479px) 100vw, 257.5px" data-w-id="5b23718b-6f2f-8331-f6b1-a4794a45c9f0"
          id="w-node-_5b23718b-6f2f-8331-f6b1-a4794a45c9f0-ec945b7d" loading="eager"
          srcset="images/3Case6---huawei-2.png 500w, images/3Case6---huawei-2.png 800w, images/3Case6---huawei-2.png 960w"><img
          class="header-photo-left-1" src="images/Case2-copy.png" width="322" alt=""
          sizes="(max-width: 479px) 100vw, 322px" data-w-id="0e008f32-1617-f27a-7abd-760eefcc8735"
          id="w-node-_0e008f32-1617-f27a-7abd-760eefcc8735-ec945b7d" loading="eager"
          srcset="images/Case2-copy-p-500.png 500w, images/Case2-copy.png 644w"><img class="header-photo-center"
          src="images/Case1.png" width="257.5" alt="" sizes="(max-width: 479px) 100vw, 257.5px"
          data-w-id="c9037e5e-4f1a-7eef-d8b1-a339fe0c2294" id="w-node-c9037e5e-4f1a-7eef-d8b1-a339fe0c2294-ec945b7d"
          loading="eager" srcset="images/Case1-p-500.png 500w, images/Case1.png 644w"><img class="header-photo-right-1"
          src="images/Case5.png" width="257.5" alt="" sizes="(max-width: 479px) 100vw, 257.5px"
          data-w-id="e0566be4-826c-378c-0d53-f02832fa701a" id="w-node-e0566be4-826c-378c-0d53-f02832fa701a-ec945b7d"
          loading="eager" srcset="images/Case5-p-500.png 500w, images/Case5.png 644w"><img class="header-photo-right-2"
          src="images/Case-collage-6-pics-done.png" width="257.5" alt="" sizes="(max-width: 479px) 100vw, 257.5px"
          data-w-id="70a28926-4468-4379-149d-cae994cfa78d" id="w-node-_70a28926-4468-4379-149d-cae994cfa78d-ec945b7d"
          loading="eager"
          srcset="images/Case-collage-6-pics-done.png 500w, images/Case-collage-6-pics-done.png 800w, images/Case-collage-6-pics-done.png 960w">
      </div>
    </div>
    <div class="color-block-grid">
      <div class="long-fur-pattern bigger"></div>
    </div>
  </header>
  <section class="section negative-bottom-margin-padding">
    <div class="container-1100">
      <div class="content-padding centered-content">
        <h2>uCase lets you customise your phone case to match your personality and vibe completely.</h2>
        <p>With uCase, you’re the artist — throw in your favorite picture, emojis, TV shows, anime, sports team, pet,
          family or wedding! Anything really. Your phone case, your rules.</p>
      </div>
    </div>
  </section>
  <section class="section wide white">
    <div class="container-1440">
      <h2 class="heading-2 bold">Pick your phone model</h2>
      <div class="content-padding centered-content">
        <p>Select your phone model from our easy list. Let’s find the perfect fit!<br></p>
      </div>
      <div class="_4-column-grid big-buttons">
        <div data-w-id="a2b159e3-7b93-6b8e-545a-468b0003a824" class="lottie-animation">
          <div class="content-padding">
            <form action="{{ route('phones.create_design') }}">

              <div class=" big-lottie-icons-wrapper"><img src="images/ucase---cases-02.png" loading="lazy" alt="">
              </div>
              <h3 class="cta-text">iPhone</h3>
              <div class="w-form">
                <label for="Phone-case-types">Search for my model</label>
                <select id="" name="model" data-name="Phone case types" required="" class="select-field-2 w-select">
                  <option value="">iPhone case type...</option>
                  @foreach ($iphone as $phone)
                    <option value="{{ $phone->id }}" attr-slug="">{{ $phone->model }}</option>
                  @endforeach
                </select>
                <input type="hidden" name="phone" value="iPhone">
              </div>
              <div class="flex justify-center min-w-full">

                <a href="/phones/create_design?phone=iPhone" class="button-2 w-button">Create</a>
                {{-- <button class="button-2 w-button">Create</button> --}}
              </div>
            </form>
          </div>
        </div>
        <div class="lottie-animation">
          <div class="content-padding">

            <form action="{{ route('phones.create_design') }}">

              <div class=" big-lottie-icons-wrapper"><img src="images/ucase---cases-03.png" loading="lazy" alt="">
              </div>
              <h3 class="cta-text">Samsung</h3>
              <div class="w-form">
                <label for="Phone-case-types">Search for my model</label>
                <select id="" name="model" data-name="Phone case types" required="" class="select-field-2 w-select">
                  <option value="">Samsung case type...</option>
                  @foreach ($samsung as $phone)
                    <option value="{{ $phone->id }}" attr-slug="">{{ $phone->model }}</option>
                  @endforeach
                  <input type="hidden" name="phone" value="Samsung">
                </select>
              </div>
              <div class="flex justify-center min-w-full">

                <a href="/phones/create_design?phone=Samsung" class="button-2 w-button">Create</a>
                {{-- <button class="button-2 w-button">Create</button> --}}
              </div>
            </form>
          </div>
        </div>
        <div class="lottie-animation">
          <div class="content-padding">

            <form action="{{ route('phones.create_design') }}">

              <div class=" big-lottie-icons-wrapper"><img src="images/ucase---cases-04.png" loading="lazy" alt="">
              </div>
              <h3 class="cta-text">Huawei</h3>
              <div class="w-form">
                <label for="Phone-case-types">Search for my model</label>
                <select id="" name="model" data-name="Phone case types" required="" class="select-field-2 w-select">
                  <option value="">Huawei case type...</option>
                  @foreach ($huawei as $phone)
                    <option value="{{ $phone->id }}" attr-slug="">{{ $phone->model }}</option>
                  @endforeach
                </select>
                <input type="hidden" name="phone" value="Huawei">
              </div>
              <div class="flex justify-center min-w-full">
                <a href="/phones/create_design?phone=Huawei" class="button-2 w-button">Create</a>
                {{-- <button class="button-2 w-button">Create</button> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container-1100">
        <div class="content-padding centered-content">
          <p>If your model is not available, fill in the form below and we will contact you once we have it instock.</p>
          <a href="#" class="button w-button">Need help? &#x27;quick Order&#x27; available via WhatsApp</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section wide animals">
    <div class="flex-horizontal left-notes">
      <h2 class="handwriting margins">featured cases...</h2><img src="images/Adoptable_Arrow-Style-1_green.svg"
        width="150" alt="">
    </div>
    <div class="homepage-2-column-grid">
      <div id="w-node-_78955da0-64cd-92bc-b20c-2b8997d07443-ec945b7d" class="w-dyn-list">
        <div role="list" class="homepage-pet-profiles-grid w-dyn-items">
          <div role="listitem" class="w-dyn-item">
            <a href="#" class="profile-card-link-block w-inline-block">
              <div class="flex-horizontal">
                <div class="profile-card-half">
                  <div class="content-padding profile-cards">
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Fish.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Trophy.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Ribbon.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Mouse.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Wool.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Climbing-Toy.svg" width="38" alt="">
                    </div>
                    <h3 class="profile-descriptor w-dyn-bind-empty"></h3>
                    <div class="badge-outline white">
                      <h6 class="w-dyn-bind-empty"></h6>
                    </div>
                    <div class="short-fur-pattern"></div>
                  </div>
                </div>
                <div id="w-node-_78955da0-64cd-92bc-b20c-2b8997d0744f-ec945b7d" class="profile-card-half"><img
                    loading="lazy" alt="" src="" class="pet-thumbnail-image w-dyn-bind-empty"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="empty-state w-dyn-empty">
          <div>Whoops, It looks like all our cats and kittens have found a home!</div>
        </div>
      </div>
      <div id="w-node-_785d643e-9b43-3405-8e99-9d744de21090-ec945b7d" class="w-dyn-list">
        <div role="list" class="homepage-pet-profiles-grid w-dyn-items">
          <div role="listitem" class="w-dyn-item">
            <a href="#" class="profile-card-link-block w-inline-block">
              <div class="flex-horizontal">
                <div class="profile-card-half">
                  <div class="content-padding profile-cards">
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Bone.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Dog-House.svg" width="38" alt="">
                    </div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Ribbon.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Trophy.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Tree.svg" width="38" alt=""></div>
                    <div class="profile-icon"><img src="images/Icons_Adoptable_White_Ball.svg" width="38" alt=""></div>
                    <h3 class="profile-descriptor w-dyn-bind-empty"></h3>
                    <div class="badge-outline white">
                      <h6 class="w-dyn-bind-empty"></h6>
                    </div>
                    <div class="long-fur-pattern"></div>
                  </div>
                </div>
                <div class="profile-card-half"><img loading="lazy" alt="" src=""
                    class="pet-thumbnail-image w-dyn-bind-empty"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="empty-state w-dyn-empty">
          <div>Whoops, It looks like all our dogs and puppies have found a home!</div>
        </div>
      </div>
    </div>
    <div>
      <div id="w-node-aee8e3bd-823d-383f-7c30-f860acc22559-ec945b7d" class="flex-horizontal right-notes"><img
          src="images/Adoptable_Arrow-Style-2_pink.svg" width="150" alt="" class="rotate-arrow">
        <h2 class="handwriting margins">...and some very good dogs.</h2>
      </div>
    </div>
  </section>
  <section class="section wide no-padding blog">
    <div class="centered-text bottom-margin-3em">
      <h2><span class="underline-wavey brand-color-4 h2">Latest</span> blog posts</h2>
    </div>
    <div class="container-1440">
      <div class="small-blog-collection-list-wrapper w-dyn-list">
        <div role="list" class="_3-column-grid w-dyn-items">
          <div id="w-node-ac95de70-5403-5157-9776-cc9ca0bfbb7f-ec945b7d" role="listitem"
            class="small-blog-collection-item w-dyn-item">
            <a href="#" class="image-container w-inline-block">
              <div class="blog-thumbnail margins"><img width="730" loading="lazy" alt="" src=""
                  class="blog-thumbnail-image w-dyn-bind-empty"></div>
            </a>
            <div class="flex-vertical space-between">
              <div class="card small-blog-post-thumbnail">
                <div class="dotted-divider-container">
                  <h6>Blog Post</h6>
                  <h6 class="w-dyn-bind-empty"></h6>
                </div>
                <a href="#" class="blog-post-link w-inline-block">
                  <h3 class="post-thumbnail-headline-small w-dyn-bind-empty"></h3>
                </a>
                <div class="w-dyn-list">
                  <div role="list" class="flex-horizontal w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                      <a href="#" class="badge-outline no-margin-left w-inline-block">
                        <h6 class="w-dyn-bind-empty"></h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="empty-state w-dyn-empty">
          <div>Sorry, no blog posts here.</div>
        </div>
      </div>
    </div>
  </section>
  <section class="section wide stories">
    <div class="centered-text bottom-margin-3em">
      <h2>Success Stories</h2>
    </div>
    <div class="slider-container">
      <div data-delay="6000" data-animation="slide" class="testimonial-slider w-slider" data-autoplay="true"
        data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
        data-nav-spacing="6" data-duration="500" data-infinite="true">
        <div class="testimonial-mask w-slider-mask">
          <div class="testimonial-slide w-slide">
            <div class="testimonial-grid">
              <div class="circle-image-wrapper"><img src="images/Adoptable_Spark-Right_green.svg" alt=""
                  class="slider-spark">
                <div class="circle-image-mask"><img src="images/Adobtable_Testimonial_Image-1.jpg" width="390"
                    loading="lazy" alt=""></div>
              </div>
              <div id="w-node-f5939f72-e415-e0ff-65d2-daf64258a811-ec945b7d" class="card slider-offset">
                <div class="centered-text slider-offset">
                  <p style="opacity:0" class="large-text">The first day we brought Miso home, he didn’t cry at all on the
                    car ride home. He was incredibly curious, and wanted to explore absolutely everything. Since I already
                    had an adult cat at home, I tried to keep Miso secluded in our study, but he had other plans! As soon
                    as my partner opened the door, Miso came dashing out, right up to Katsu, and nose kissed him. <br>Best
                    friends for life.</p>
                  <div style="opacity:0" class="squiggle-container"><img src="images/Adoptable_Wiggle-Style-1_green.svg"
                      width="150" loading="lazy" alt="" class="squiggle"></div>
                  <div style="opacity:0" class="large-text"><strong>The Dorian Family &amp; Miso </strong></div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide w-slide">
            <div class="testimonial-grid">
              <div class="circle-image-wrapper"><img src="images/Adoptable_Spark-Right_orange.svg" alt=""
                  class="slider-spark">
                <div class="circle-image-mask"><img src="images/Adobtable_Testimonial_Image-2.jpg" width="390"
                    loading="lazy" alt=""></div>
              </div>
              <div id="w-node-_75bed33a-2617-a42b-d44a-a7c68ddca047-ec945b7d" class="card slider-offset">
                <div class="centered-text slider-offset">
                  <p style="opacity:0" class="large-text">We visited your shelter not knowing that we would leave with a
                    puppy (well, I knew but my fiancé needed a little persuading). She changed our lives and instantly
                    brought us such joy, that we decided to return to save her baby brother, Jackson. Nothing can compare
                    to the unconditional love you will receive from a rescue animal.</p>
                  <div style="opacity:0" class="squiggle-container"><img src="images/Adoptable_Wiggle-Style-1_orange.svg"
                      width="150" alt="" class="squiggle"></div>
                  <div style="opacity:0" class="large-text"><strong>The Gibbs Family &amp; Missy... and also
                      Jackson</strong></div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide w-slide">
            <div class="testimonial-grid">
              <div class="circle-image-wrapper"><img src="images/Adoptable_Spark-Right_light-blue.svg" alt=""
                  class="slider-spark">
                <div class="circle-image-mask"><img src="images/Adobtable_Testimonial_Image-3.jpg" width="390"
                    loading="lazy" alt=""></div>
              </div>
              <div id="w-node-_0a8a8612-7b4c-4680-6340-4c824661ce05-ec945b7d" class="card slider-offset">
                <div class="centered-text slider-offset">
                  <p style="opacity:0" class="large-text">This is our beloved Miro, adopted from Adoptable just six weeks
                    ago. With the support of your lovely foster carers and now with a permanent home she has come out of
                    her shell and absolutely adores her new life. Frank and I are so thankful you saved her and the stars
                    aligned so we could welcome her into our family.</p>
                  <div style="opacity:0" class="squiggle-container"><img
                      src="images/Adoptable_Wiggle-Style-1_light-blue.svg" width="150" alt="" class="squiggle"></div>
                  <div style="opacity:0" class="large-text"><strong>The Marshall Family and Miro</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="left-arrow hide-on-mobile w-slider-arrow-left">
          <div class="arrow-padding"><img src="images/Icons_Adoptable_Purple_Arrow-Left.svg" width="24" loading="lazy"
              id="w-node-d2bed5c3-b2bf-15c6-19d2-1aab90f83ac9-ec945b7d" alt=""></div>
        </div>
        <div class="right-arrow hide-on-mobile w-slider-arrow-right">
          <div class="arrow-padding"><img src="images/Icons_Adoptable_Purple_Arrow-Right.svg" width="24" loading="lazy"
              id="w-node-d2bed5c3-b2bf-15c6-19d2-1aab90f83acb-ec945b7d" alt=""></div>
        </div>
        <div class="slide-nav hide w-slider-nav w-slider-nav-invert w-round"></div>
      </div>
    </div>
  </section>
@endsection