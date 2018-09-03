@extends('admin.layouts.main')

@section('content')
<div class="content">
    <div class="container">
       <div class="row">
           <div class="col-md-4">
           <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Blog Posts</h5>
                <h4 class="card-title">Shipped Products</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Projects</h5>
                <h4 class="card-title">Shipped Products</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4">
           <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">All Images</h5>
                <h4 class="card-title">Shipped Products</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
        </div>
       </div>
       <div class="col-md-12 give-margin-card-dash">
                  <div class="row">
                   <div class="col-md-6">

                       <div class="card ">
                         <div class="card-header">
                          <h4 class="card-title text-center"> All Blog Posts</h4>
                          <p class="category"> Here is a subtitle for this table</p>
                        </div>
                           <div class="card-body">
                               <table class="table table-hover table-responsive">
                                   <thead>
                                       <tr>
                                           <th>Title</th>
                                           <th>Slug</th>
                                           <th>No of Views</th>
                                           <th>Images</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">

                       <div class="card ">
                       <div class="card-header">
                              <h4 class="card-title text-center"> All Projects</h4>
                              <p class="category"> Here is a subtitle for this table</p>
                            </div>
                           <div class="card-body">

                            <div class="table-responsive">
                               <table class="table table-hover ">
                                   <thead class="text-primary">
                                       <tr>
                                           <th>Name</th>
                                           <th>Slug</th>
                                           <th>No of Views</th>
                                           <th>Images</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
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
@endsection