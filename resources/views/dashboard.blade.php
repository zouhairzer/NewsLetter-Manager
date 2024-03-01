@extends('partials.HTML_tags')

@section('title', 'Categories')

@section('content')

<body class="dark-edition ">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="wrapper ">
    {{-- Sidebar --}}
    @include('partials._sideBare')
    {{-- End Sidebar --}}
        <div class="main-panel">

        {{-- Navigation --}}
        @include('partials._nav')
        {{-- End Navigation --}}

            <div class="content">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons"></i>
                                        </div>
                                        <h4 class="card-title">Global Sales by Top Locations</h4>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-responsive table-sales">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="/assets/img/flags/US.png" < div>
                                                                </td>
                                                                <td>USA
                                                                </td>
                                                                <td class="text-right">
                                                                    2.920
                                                                </td>
                                                                <td class="text-right">
                                                                    53.23%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="/assets/img/flags/DE.png" < div>
                                                                </td>
                                                                <td>Germany
                                                                </td>
                                                                <td class="text-right">
                                                                    1.300
                                                                </td>
                                                                <td class="text-right">
                                                                    20.43%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="/assets/img/flags/AU.png" < div>
                                                                </td>
                                                                <td>Australia
                                                                </td>
                                                                <td class="text-right">
                                                                    760
                                                                </td>
                                                                <td class="text-right">
                                                                    10.35%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="/assets/img/flags/GB.png" < div>
                                                                </td>
                                                                <td>United Kingdom
                                                                </td>
                                                                <td class="text-right">
                                                                    690
                                                                </td>
                                                                <td class="text-right">
                                                                    7.87%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="/assets/img/flags/RO.png" < div>
                                                                </td>
                                                                <td>Romania
                                                                </td>
                                                                <td class="text-right">
                                                                    600
                                                                </td>
                                                                <td class="text-right">
                                                                    5.94%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="/assets/img/flags/BR.png" < div>
                                                                </td>
                                                                <td>Brasil
                                                                </td>
                                                                <td class="text-right">
                                                                    550
                                                                </td>
                                                                <td class="text-right">
                                                                    4.34%
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ml-auto mr-auto">
                                                <div id="worldMap" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-primary" data-header-animation="true">
                                        <div class="ct-chart" id="websiteViewsChart"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions">
                                            <button type="button" class="btn text-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn text-info btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Refresh">
                                                <i class="material-icons">refresh</i>
                                            </button>
                                            <button type="button" class="btn text-default btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Change Date">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">Website Views</h4>
                                        <p class="card-category">Last Campaign Performance</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-warning" data-header-animation="true">
                                        <div class="ct-chart" id="dailySalesChart"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions">
                                            <button type="button" class="btn text-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn text-info btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Refresh">
                                                <i class="material-icons">refresh</i>
                                            </button>
                                            <button type="button" class="btn text-default btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Change Date">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">Daily Sales</h4>
                                        <p class="card-category">
                                            <span class="text-warning"><i class="fa fa-long-arrow-up"></i> 55% </span>
                                            increase in today sales.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">access_time</i> updated 4 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-info" data-header-animation="true">
                                        <div class="ct-chart" id="completedTasksChart"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions">
                                            <button type="button" class="btn text-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn text-info btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Refresh">
                                                <i class="material-icons">refresh</i>
                                            </button>
                                            <button type="button" class="btn text-default btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Change Date">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">Completed Tasks</h4>
                                        <p class="card-category">Last Campaign Performance</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">weekend</i>
                                        </div>
                                        <p class="card-category">Bookings</p>
                                        <h3 class="card-title">184</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-warning">warning</i>
                                            <a href="javascript:;" class="warning-link">Get More Space...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">equalizer</i>
                                        </div>
                                        <p class="card-category">Website Visits</p>
                                        <h3 class="card-title">75.521</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">local_offer</i> Tracked from Google Analytics
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">store</i>
                                        </div>
                                        <p class="card-category">Revenue</p>
                                        <h3 class="card-title">$34,245</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">date_range</i> Last 24 Hours
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-info card-header-icon">
                                        <div class="card-icon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <p class="card-category">Followers</p>
                                        <h3 class="card-title">+245</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">update</i> Just Updated
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Manage Listings</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-product">
                                    <div class="card-header card-header-image" data-header-animation="true">
                                        <a href="javascript:;">
                                            <img class="img" src="../assets/img/card-2.jpg">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions text-center">
                                            <button type="button" class="btn text-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn text-default btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                            </button>
                                            <button type="button" class="btn text-success btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" class="btn text-danger btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">
                                            <a href="javascript:;">Cozy 5 Stars Apartment</a>
                                        </h4>
                                        <div class="card-description">
                                            The place is close to Barceloneta Beach and bus stop just 2 min by walk and
                                            near to "Naviglio" where you can enjoy the main night life in Barcelona.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="price">
                                            <h4>$899/night</h4>
                                        </div>
                                        <div class="stats">
                                            <p class="card-category"><i class="material-icons">place</i> Barcelona,
                                                Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-product">
                                    <div class="card-header card-header-image" data-header-animation="true">
                                        <a href="javascript:;">
                                            <img class="img" src="/assets/img/card-3.jpg">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions text-center">
                                            <button type="button" class="btn text-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn text-default btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                            </button>
                                            <button type="button" class="btn text-success btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" class="btn text-danger btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">
                                            <a href="javascript:;">Office Studio</a>
                                        </h4>
                                        <div class="card-description">
                                            The place is close to Metro Station and bus stop just 2 min by walk and near
                                            to "Naviglio" where you can enjoy the night life in London, UK.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="price">
                                            <h4>$1.119/night</h4>
                                        </div>
                                        <div class="stats">
                                            <p class="card-category"><i class="material-icons">place</i> London, UK
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-product">
                                    <div class="card-header card-header-image" data-header-animation="true">
                                        <a href="javascript:;">
                                            <img class="img" src="/assets/img/card-1.jpg">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions text-center">
                                            <button type="button" class="btn text-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn text-default btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                            </button>
                                            <button type="button" class="btn text-success btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" class="btn text-danger btn-link"
                                                data-toggle="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">
                                            <a href="javascript:;">Beautiful Castle</a>
                                        </h4>
                                        <div class="card-description">
                                            The place is close to Metro Station and bus stop just 2 min by walk and near
                                            to "Naviglio" where you can enjoy the main night life in Milan.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="price">
                                            <h4>$459/night</h4>
                                        </div>
                                        <div class="stats">
                                            <p class="card-category"><i class="material-icons">place</i> Milan, Italy
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com/">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="https://creative-tim.com/presentation">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/blog">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors ml-auto mr-auto">
                            <span class="badge filter badge-purple active" data-color="purple"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-warning" data-color="orange"></span>
                            <span class="badge filter badge-danger" data-color="danger"></span>
                            <span class="badge filter badge-rose" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="ml-auto mr-auto">
                            <span class="badge filter badge-lighter" data-background-color="lighter"></span>
                            <span class="badge filter badge-default active" data-background-color="default"></span>
                            <span class="badge filter badge-darker" data-background-color="darker"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <label class="ml-auto">
                            <div class="togglebutton switch-sidebar-mini">
                                <label>
                                    <input type="checkbox">
                                    <span class="toggle"></span>
                                </label>
                            </div>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Images</p>
                        <label class="switch-mini ml-auto">
                            <div class="togglebutton switch-sidebar-image">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="toggle"></span>
                                </label>
                            </div>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="/assets/img/sidebar-1.jpg" alt>
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="/assets/img/sidebar-2.jpg" alt>
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="/assets/img/sidebar-3.jpg" alt>
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="/assets/img/sidebar-4.jpg" alt>
                    </a>
                </li>
                <li class="button-container">
                    <a href="https://www.creative-tim.com/product/material-dashboard-dark-pro" target="_blank"
                        class="btn btn-rose btn-block btn-fill">Buy Now</a>
                    <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard-dark"
                        target="_blank" class="btn btn-secondary btn-block">
                        Documentation
                    </a>
                    <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank"
                        class="btn btn-info btn-block">
                        Get Free Demo!
                    </a>
                </li>
                <li class="button-container github-star">
                    <a class="github-button"
                        href="https://github.com/creativetimofficial/ct-material-dashboard-dark-pro"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot;
                        45</button>
                    <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i>
                        &middot; 50</button>
                    <br>
                    <br>
                </li>
            </ul>
        </div>
    </div>

    @include('partials.Auth._scriptes')
@endsection
