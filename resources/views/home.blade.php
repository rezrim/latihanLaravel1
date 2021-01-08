@extends('app')

@section('content')
    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="assets/img/about/about-1.jpg" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>Hi Guys!</h3>
              <p>Est diam venenatis arcu lacus ad. Duis quis eros. Cursus et rutrum eleifend sollicitudin lacinia justo id turpis. Nec convallis integer. Odio eget duis. Nulla aenean et. Blandit varius sollicitudin. Pellentesque leo primis neque urna magnis. Elit ut sollicitudin. Et est a nam dolores eget itaque sagittis et parturient duis est eleifend sociis rutrum odio viverra integer.</p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> Name </span> <span class="pro-detail">Tom Saulnier</span></li>
                  <li><span class="pro-title"> Age </span> <span class="pro-detail">25 Years</span></li>
                  <li><span class="pro-title"> Experience </span> <span class="pro-detail">4 Years</span></li>
                  <li><span class="pro-title"> Country </span> <span class="pro-detail">USA</span></li>
                  <li><span class="pro-title"> Location </span> <span class="pro-detail">San Francisco, CA</span></li>
                  <li><span class="pro-title"> e-mail </span> <span class="pro-detail">email@example.com</span></li>
                  <li><span class="pro-title"> Phone </span> <span class="pro-detail">+ (00) 123 456 789</span></li>
                  <li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a>
              <a href="#" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
            </div>
          </div>   
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <section id="services" class="services section-padding">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">Pekerjaan Ku</h2>
      <div class="container">
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon">
                <i class="icon-grid"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Front-end Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="icon-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Graphic Design</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
              <div class="icon">
                <i class="icon-briefcase"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Business Branding</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="icon-bubbles"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Consultancy</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Resume Section Start -->
    <div id="resume" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="education wow fadeInRight" data-wow-delay="0.3s">
              <ul class="timeline">
                <li>
                  <i class="icon-graduation"></i>
                  <h2 class="timelin-title">Riwayat Pendidikan</h2>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">Bsc In CSE - Yale University</h3>
                    <span>2012 - 2016</span>
                    <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">Higher Secondary School - San Francisco College</h3>
                    <span>2010 - 2012</span>
                    <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">Secondary School - Labratory High School</h3>
                    <span>2005 - 2010</span>
                    <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="experience wow fadeInRight" data-wow-delay="0.6s">
              <ul class="timeline">
                <li>
                  <i class="icon-briefcase"></i>
                  <h2 class="timelin-title">Pengelaman Kerja</h2>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">Art Director - Tesla Inc.</h3>
                    <span>Jan 2018 - Present</span>
                    <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">UX/UI Designer - Samsung</h3>
                    <span>Nov 2016 - Dec 2017</span>
                    <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">Intern UI Designer - UIdeck</h3>
                    <span>Mar 2015 - Oct 2016</span>
                    <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Resume Section End -->
    @endsection

   

