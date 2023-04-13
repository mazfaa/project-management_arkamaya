<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Project Management Web Application System by Arkamaya">
    <meta name="author" content="M Azfa Asykarulloh">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Arkamaya - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Datatable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

</head>

<body id="page-top">

    @include('sweetalert::alert')
    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Arkamaya</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Arkamaya</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <div class="d-flex align-items-center mb-4">
                    <form class="mr-3 border px-3 py-2 shadow" style="width: 28em;">
                      <div class="form-group d-inline-block mr-2" style="width: 22em;">
                        <label for="project">Project Name</label>
                        <input type="text" name="search" class="form-control" id="searchProject" placeholder="WMS">
                      </div>
                      <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </form>
  
                    <form action="{{ route('index') }}" class="d-flex ms-5 align-items-center mr-3 border px-3 py-2 shadow" id="clientOptForm" style="width: 40em;">
                      <div class="form-group w-100 mr-3">
                        <label for="inputState">Client</label>
                        <select id="inputState" name="client" class="form-control">
                          <option value="" {{ Request::get('client') == '' ? 'selected' : '' }}>All Client</option>
                          @foreach ($clients as $client)
                            <option value="{{ $client->client_name }}" {{ (Request::get('client') == $client->client_name) ? 'selected' : '' }}>
                                {{ $client->client_name }}
                            </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group d-inline-block w-100 mr-3">
                        <label for="inputState">Status</label>
                        <select id="inputState" class="form-control" name="status">
                          <option value="" {{ Request::get('status') == '' ? 'selected' : '' }}>All Status</option>
                          <option value="Open" {{ Request::get('status') == 'Open' ? 'selected' : '' }}>Open</option>
                          <option value="Doing" {{ Request::get('status') == 'Doing' ? 'selected' : '' }}>Doing</option>
                          <option value="Done" {{ Request::get('status') == 'Done' ? 'selected' : '' }}>Done</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-secondary d-flex" style="margin-top: 1em"><i class="bi bi-filter mr-1"></i> Filter</button>
                    </form>
  
                    <form action="{{ route('index') }}" class="ml-auto" style="margin-top: 1.9em;">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-fw fa-cog"></i> Reset</button>
                      </div>
                    </form>
                  </div>

                  <div class="card shadow">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="font-weight-bold text-primary">Projects Table</h6>
                        </div>
                      <div>
                        <button type="submit" class="btn btn-primary mr-2" data-toggle="modal" data-target=".create-modal"><i class="bi bi-plus-circle"></i> New Project</button>
                        <div class="modal fade create-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="card">
                                <div class="card-header"><i class="bi bi-plus-lg"></i> Create Project
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="card-body">
                                  <form action="{{ route('store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                      <label for="projectName">Project Name</label>
                                      <input type="text" name="project_name" value="{{ old('project_name') }}" class="form-control @error('project_name') is-invalid @enderror" id="projectName" placeholder="WMS">
                                      @error('project_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="clientName">Client Name</label>
                                      <input type="text" name="client_name" value="{{ old('client_name') }}" class="form-control @error('client_name') is-invalid @enderror" id="clientName" placeholder="NEC">
                                      @error('client_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="clientAddress">Client Address</label>
                                      <input type="text" name="client_address" value="{{ old('client_address') }}" class="form-control @error('client_address') is-invalid @enderror" id="clientAddress" placeholder="Bandung">
                                      @error('client_address')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="clientChoose">Or Choose an Existing Client</label>
                                      <select name="client_opt" id="createClientOpt" class="form-control @error('client_opt') is-invalid @enderror">
                                        <option selected>-- Select Client --</option>
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->client_name }}" @if (old('client_opt') == $client->client_name) {{ 'selected' }} @endif>{{ $client->client_name }}</option>
                                        @endforeach
                                      </select>
                                      @error('client_opt')
                                          <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="projectStart">Project Start</label>
                                      <input type="date" name="project_start" value="{{ old('project_start', date('Y-m-d')) }}" class="form-control @error('project_start') is-invalid @enderror" id="projectStart">
                                      @error('project_start')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="projectEnd">Project End</label>
                                      <input type="date" name="project_end" value="{{ old('project_end', date('Y-m-d')) }}" class="form-control @error('project_end') is-invalid @enderror" id="projectEnd">
                                      @error('project_end')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="createStatusOpt">Status</label>
                                      <select name="project_status" id="createStatusOpt" class="form-control @error('project_status') is-invalid @enderror">
                                        <option selected>-- Select Status --</option>
                                        <option value="Open" @if (old('project_status') == 'Open') {{ 'selected' }} @endif>Open</option>
                                        <option value="Doing" @if (old('project_status') == 'Doing') {{ 'selected' }} @endif>Doing</option>
                                        <option value="Done" @if (old('project_status') == 'Done') {{ 'selected' }} @endif>Done</option>
                                      </select>
                                      @error('project_status')
                                          <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Create</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target=".modal-delete"><i class="bi bi-x-circle"></i> Delete Project</button>
                        <div class="modal fade modal-delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="card">
                                <div class="card-header"><i class="bi bi-x-circle"></i> Delete Project</div>
                                <div class="card-body">
                                  Are you sure want to delete this record?
                                </div>
                                <div class="card-footer">
                                  <button type="submit" class="btn btn-sm btn-danger" id="deleteProjectBtn"><i class="bi bi-x-circle"></i> Delete</button>
                                  <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable" id="dataTable">
                          <thead>
                            <tr>
                              <th>
                                <input type="checkbox" name="all" id="allCheckbox">
                              </th>
                              <th>Action</th>
                              <th>Project Name</th>
                              <th>Client</th>
                              <th>Project Start</th>
                              <th>Project End</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          @php
                              use Carbon\Carbon;
                          @endphp
                          <tbody>
                            @foreach ($projects as $project)
                              <tr id="projectId{{ $project->id }}">
                                <td>
                                  <input type="checkbox" name="ids" class="checkbox_id" value="{{ $project->id }}" id="">
                                </td>
                                <td>
                                  <button type="submit" class="btn btn-sm btn-success" data-toggle="modal" data-target=".edit-modal-{{ $project->id }}"><i class="bi bi-pencil-square"></i> Edit</button>
                                  @include('edit', ['project' => $project])
                                </td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->client_name }}</td>
                                <td>{{ Carbon::parse($project->project_start)->format('d M Y') }}</td>
                                <td>{{ Carbon::parse($project->project_end)->format('d M Y') }}</td>
                                <td>
                                  <span class="badge badge-{{ $project->project_status == 'Open' ? 'primary' : ($project->project_status == 'Doing' ? 'warning' : 'success') }}">
                                    {{ $project->project_status }}
                                  </span>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                            <th>
                              <input type="checkbox" name="all" id="allCheckboxFoot">
                            </th>
                            <th>Action</th>
                            <th>Project Name</th>
                            <th>Client</th>
                            <th>Project Start</th>
                            <th>Project End</th>
                            <th>Status</th>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Datatable -->
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- jQuery CDN -->
    <script src="{{ asset('assets/js/jquery-3.6.4.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
      $('#allCheckbox').click(function () {
        $('.checkbox_id').prop('checked', $(this).prop('checked'));
      });

      $('#deleteProjectBtn').click(function (e) {
        e.preventDefault();
        let ids = [];

        $('input:checkbox[name=ids]:checked').each(function () {
          ids.push($(this).val());

          $.ajax({
            url: '{{ route('destroy') }}',
            type: 'delete',
            data: {
              'ids': ids,
              '_token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
              $.each(ids, function (i, e) {
                $(`#projectId${e}`).remove();
              });
            }
          });
        });

        location.reload();
      });
    </script>
</body>

</html>