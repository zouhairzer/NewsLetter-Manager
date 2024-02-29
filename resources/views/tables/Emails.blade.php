@extends('partials.HTML_tags')
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