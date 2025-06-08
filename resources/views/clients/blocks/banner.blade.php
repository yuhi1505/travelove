        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="https://webtendtheme.net/html/2024/ravelo/contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn style-two">
                                <span data-hover="Submit now">Submit now</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="contact.html"><i class="fab fa-twitter"></i></a>
                    <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                    <a href="contact.html"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->
       
        
        <!-- Hero Area Start -->
        <section class="hero-area bgc-black pt-200 rpt-120 rel z-2">
            <div class="container-fluid">
                <h1 class="hero-title" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">tour & Travel</h1>
                <div class="main-hero-image bgs-cover" style="background-image: url('{{ asset('clients/images/hero/hero.jpg') }}');"></div>
            </div>
            <div class="container container-1400">
                <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                        <span class="title">Destinations</span>
                        <select name="city" id="city">
                            <option value="value1">City or Region</option>
                            <option value="value2">City</option>
                            <option value="value2">Region</option>
                        </select>
                    </div>
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-flag"></i></div>
                        <span class="title">All Activity</span>
                        <select name="activity" id="activity">
                            <option value="value1">Choose Activity</option>
                            <option value="value2">Daily</option>
                            <option value="value2">Monthly</option>
                        </select>
                    </div>
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                        <span class="title">Departure Date</span>
                        <select name="date" id="date">
                            <option value="value1">Date from</option>
                            <option value="value2">10</option>
                            <option value="value2">20</option>
                        </select>
                    </div>
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-users"></i></div>
                        <span class="title">Guests</span>
                        <select name="cuests" id="cuests">
                            <option value="value1">0</option>
                            <option value="value2">1</option>
                            <option value="value2">2</option>
                        </select>
                    </div>
                    <div class="search-button">
                        <button class="theme-btn">
                            <span data-hover="Search">Search</span>
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->