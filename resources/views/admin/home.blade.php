@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-1 bg-info">
            @include('layouts.partials.sidebarMain')
        </div>
        <div class="col-md-11 mt-3">
            <div class="card" >
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    admin --}}

                        <!--Start Row-->
                    <div class="row mb-3">
                            <!-- Students Card -->
                            <?php
                            // $query1=mysqli_query($conn,"SELECT * from tblstudents");
                            // $students = mysqli_num_rows($query1);
                            ?>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{url('admin/pb/PersList')}}" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-primary text-white ">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Promotion Board</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-graduate fa-2x text-warning"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="#" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-success text-white ">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Evaluation Board</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-brands fa-gg fa-2x text-info"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="#" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-warning text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Mission Selection</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-peace fa-2x text-primary"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="#" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-secondary text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Course Selection</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-pen fa-2x text-info"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                    </div>
                        <!--Row-->
                        <!--Start Row-->
                    <div class="row mb-3">
                            <!-- Students Card -->
                            <?php
                            // $query1=mysqli_query($conn,"SELECT * from tblstudents");
                            // $students = mysqli_num_rows($query1);
                            ?>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="main_cell.php" class="text-decoration-none">
                              <div class="card h-100 ">
                                <div class="card-body btn btn-primary text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Qatar Mission Selection</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-peace fa-2x text-warning"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="msn_pers_add.php" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-success text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">OKP Mission Selection</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-peace fa-2x text-info"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="summary_add.php" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-warning text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Add Mission Vacancy</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-primary"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="#" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-secondary text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">All Mission Vacancy</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-users fa-2x text-info"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                    </div>
                        <!--Row-->
                        <!--Start Row-->
                    <div class="row mb-3">
                            <!-- Students Card -->
                            <?php
                            // $query1=mysqli_query($conn,"SELECT * from tblstudents");
                            // $students = mysqli_num_rows($query1);
                            ?>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="main_cell.php" class="text-decoration-none">
                              <div class="card h-100 ">
                                <div class="card-body btn btn-primary text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Add Trade</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-screwdriver-wrench fa-2x text-warning"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="msn_pers_add.php" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-success text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">All Trade</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-screwdriver-wrench fa-2x text-info"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="summary_add.php" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-warning text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">Add Rank</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-ranking-star fa-2x text-primary"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="#" class="text-decoration-none">
                              <div class="card h-100">
                                <div class="card-body btn btn-secondary text-white">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-uppercase mb-1">All Rank</div>
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php //echo $students;?></div>
                                      <div class="mt-2 mb-0 text-muted text-xs">
                                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                        <span>Since last month</span> -->
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-ranking-star fa-2x text-info"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                    </div>
                        <!--Row-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
