<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark-pro/examples/tables/extended.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 10:49:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    Material Dashboard Dark PRO by Creative Tim
  </title>
<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />


<link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-dark-pro" />

<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
<meta name="description" content="Material Dashboard Dark PRO is a Premium Material Bootstrap 4 Admin with a dark fresh, new design inspired by Google's Material Design.">

<meta itemprop="name" content="Material Dashboard Dark PRO by Creative Tim">
<meta itemprop="description" content="Material Dashboard Dark PRO is a Premium Material Bootstrap 4 Admin with a dark fresh, new design inspired by Google's Material Design.">
<meta itemprop="image" content="../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/material-dashboard-dark-pro/opt_mdpd_thumbnail.jpg">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Material Dashboard Dark PRO by Creative Tim">
<meta name="twitter:description" content="Material Dashboard Dark PRO is a Premium Material Bootstrap 4 Admin with a dark fresh, new design inspired by Google's Material Design.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/material-dashboard-dark-pro/opt_mdpd_thumbnail.jpg">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Material Dashboard Dark PRO by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="../dashboard.html" />
<meta property="og:image" content="../../../../raw.githubusercontent.com/creativetimofficial/public-assets/master/material-dashboard-dark-pro/opt_mdpd_thumbnail.jpg" />
<meta property="og:description" content="Material Dashboard Dark PRO is a Premium Material Bootstrap 4 Admin with a dark fresh, new design inspired by Google's Material Design." />
<meta property="og:site_name" content="Creative Tim" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

<link href="../../assets/css/material-dashboard.minf700.css?v=1.0.1" rel="stylesheet" />

<link href="../../assets/demo/demo.css" rel="stylesheet" />

<style>
    .async-hide {
      opacity: 0 !important
    }
  </style>
<script src="/assets/js/headerScript.js"></script>
</head>
<body class="dark-edition ">


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="wrapper ">
{{-- ------- sidbare ------------- --}}
@include('partials._sideBare');
{{-- ------- end sidbare ------------- --}}
<div class="main-panel">

{{-- -------> nav <---------------------- --}}
@include('partials._nav');
{{-- -------> end nav <------------------ --}}
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                  <h4 class="card-title">Simple Table</h4>
              </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Job Position</th>
                    <th>Since</th>
                    <th class="text-right">Salary</th>
                    <th class="text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">3</td>
                    <td>Alex Mike</td>
                    <td>Design</td>
                    <td>2010</td>
                    <td class="text-right">&euro; 92,144</td>
                    <td class="td-actions text-right">
                      <button type="button" data-toggle="tooltip" class="btn btn-link text-info">
                      <i class="material-icons">person</i>
                      </button>
                      <button type="button" data-toggle="tooltip" class="btn btn-link text-success">
                      <i class="material-icons">edit</i>
                      </button>
                      <button type="button" data-toggle="tooltip" class="btn btn-link text-danger">
                      <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
@include('partials.Auth._scriptes')
</body>
</html>