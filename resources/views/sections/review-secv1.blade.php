<section class="review-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="g-rev-img">
              <img src="{{ asset(config('site_config.assets.images').'g-rev.png') }}" alt="image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-12">
            <div class="g-review-slider">
              <div class="slider responsive">
                <?php for($i=0;$i<5;$i++){ ?>
                <div>
                  <div class="rev-box">
                    <img src="{{ asset(config('site_config.assets.images').'re1.png') }}" alt="image" class="img-fluid">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="rev-stars">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>