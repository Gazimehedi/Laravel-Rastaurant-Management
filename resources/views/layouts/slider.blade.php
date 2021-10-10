<div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>KlassyCafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                        @foreach ($slider as $slider)
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{asset('media/slider/'.$slider->image)}}" alt="slider image">
                            </div>
                          </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>