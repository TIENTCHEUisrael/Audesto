<!DOCTYPE html>
<html lang="fr">

@include('layouts.client.partials.topbar')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.client.partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.client.partials.sidenav')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Nouvelle Réservation</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">Acceuil</a></li>
                    <li class="breadcrumb-item">Réservation</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <!-- Horizontal Form -->
                    <form>
                        <div class="row mb-3">
                            <!-- weather widget start -->
                            <div id="m-booked-custom-widget-83064">
                                <div class="weather-customize" style="width:250px;">
                                    <div class="booked-weather-custom-160 color-009fde" style="width:250px;"
                                        id="width3">
                                        <div class="booked-weather-custom-160-date">Météo, 01 Avril</div>
                                        <div class="booked-weather-custom-160-main"> <a target="_blank"
                                                href="https://hotelmix.fr/weather/yaounde-9205"
                                                class="booked-weather-custom-160-city"> Météo à Yaoundé </a>
                                            <div class="booked-weather-custom-160-degree booked-weather-custom-C wmd18">
                                                <span><span class="plus">+</span>26</span>
                                            </div>
                                            <div class="booked-weather-custom-details">
                                                <p><span>Max: <strong><span
                                                                class="plus">+</span>29<sup>°</sup></strong></span><span>
                                                        Min: <strong><span
                                                                class="plus">+</span>20<sup>°</sup></strong></span>
                                                </p>
                                                <p>Humidité: <strong>76%</strong></p>
                                                <p>Vent: <strong>NW - 10 KPH</strong></p>
                                            </div>
                                        </div>
                                        <div class="booked-weather-custom-160-main"> <a target="_blank"
                                                href="https://hotelmix.fr/weather/douala-12179"
                                                class="booked-weather-custom-160-city"> Météo à Douala </a>
                                            <div class="booked-weather-custom-160-degree booked-weather-custom-C wmd18">
                                                <span><span class="plus">+</span>30</span>
                                            </div>
                                            <div class="booked-weather-custom-details">
                                                <p><span>Max: <strong><span
                                                                class="plus">+</span>31<sup>°</sup></strong></span><span>
                                                        Min: <strong><span
                                                                class="plus">+</span>25<sup>°</sup></strong></span>
                                                </p>
                                                <p>Humidité: <strong>68%</strong></p>
                                                <p>Vent: <strong>SW - 16 KPH</strong></p>
                                            </div>
                                        </div>
                                        <div class="booked-weather-custom-160-main"> <a target="_blank"
                                                href="https://hotelmix.fr/weather/buea-326454"
                                                class="booked-weather-custom-160-city"> Météo à Buea </a>
                                            <div class="booked-weather-custom-160-degree booked-weather-custom-C wmd18">
                                                <span><span class="plus">+</span>24</span>
                                            </div>
                                            <div class="booked-weather-custom-details">
                                                <p><span>Max: <strong><span
                                                                class="plus">+</span>25<sup>°</sup></strong></span><span>
                                                        Min: <strong><span
                                                                class="plus">+</span>20<sup>°</sup></strong></span>
                                                </p>
                                                <p>Humidité: <strong>76%</strong></p>
                                                <p>Vent: <strong>W - 8 KPH</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script
                                type="text/javascript"> var css_file = document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel", "stylesheet"); css_file.setAttribute("type", "text/css"); css_file.setAttribute("href", 'https://s.bookcdn.com/css/weather.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_83064(data) { if (typeof (data) != 'undefined' && data.results.length > 0) { for (var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-custom-widget-83064'); if (objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if (copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=9205,12179,326454;type=2;scode=40595;ltid=3457;domid=581;anc_id=20071;countday=undefined;cmetric=1;wlangID=3;color=009fde;wwidth=250;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1"; widgetSrc += ';ref=' + widgetUrl; widgetSrc += ';rand_id=83064'; var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script>
                            <!-- weather widget end -->
                        </div>
                    </form><!-- End Horizontal Form -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Multi Columns Form</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="inputName5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s"
                                        placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Multi Columns Form</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="inputName5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s"
                                        placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tables without borders</h5>
                    <p>Add <code>.table-borderless</code> for a table without borders.</p>
                    <!-- Active Table -->
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Age</th>
                                <th scope="col">Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bridie Kessler</td>
                                <td>Developer</td>
                                <td>35</td>
                                <td>2014-12-05</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashleigh Langosh</td>
                                <td>Finance</td>
                                <td>45</td>
                                <td>2011-08-12</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Angus Grady</td>
                                <td>HR</td>
                                <td>34</td>
                                <td>2012-06-11</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Raheem Lehner</td>
                                <td>Dynamic Division Officer</td>
                                <td>47</td>
                                <td>2011-04-19</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Tables without borders -->

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.client.partials.footer')
</body>

</html>