@extends('layouts.app-admin')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Session</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">21,459</h4>
                                    <small class="text-success">(+29%)</small>
                                </div>
                                <p class="mb-0">Total Users</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-primary">
                                  <i class="bx bx-user bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Paid Users</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">4,567</h4>
                                    <small class="text-success">(+18%)</small>
                                </div>
                                <p class="mb-0">Last week analytics </p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-danger">
                                  <i class="bx bx-user-check bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Active Users</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">19,860</h4>
                                    <small class="text-danger">(-14%)</small>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-success">
                                  <i class="bx bx-group bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Pending Users</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">237</h4>
                                    <small class="text-success">(+42%)</small>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-warning">
                                  <i class="bx bx-user-voice bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                    <div class="col-md-6 user_role">
                        <select id="filter-role" class="form-select text-capitalize">
                            <option value=""> Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="col-md-6 user_status">
                        <select id="filter-status" class="form-select text-capitalize">
                            <option value=""> Select Status</option>
                            @foreach(App\Enum\UserStatusesEnum::cases() as $status)
                                <option value="{{ $status->value }}" class="text-capitalize">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row mx-2">
                        <div class="col-md-2">
                            <div class="me-3">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select" id="per-page">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div
                                class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control" placeholder="Search.."
                                            aria-controls="DataTables_Table_0" id="table-search">
                                    </label>
                                </div>
                                <div class="dt-buttons">
                                    <button
                                        class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary mx-3"
                                        tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                        aria-haspopup="dialog" aria-expanded="false"><span><i
                                                class="bx bx-export me-1"></i>Export</span><span
                                            class="dt-down-arrow">▼</span>
                                    </button>
                                    <button class="dt-button add-new btn btn-primary" tabindex="0"
                                            aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasAddUser"><span><i
                                                class="bx bx-plus me-0 me-sm-1"></i><span
                                                class="d-none d-sm-inline-block">Add New User</span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-users table border-top dataTable no-footer dtr-column"
                           id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1390px;">
                        <thead>
                        <tr>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 353px;" data-sort="name">
                                User
                            </th>
                            <th class="sorting_disabled" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 176px;">
                                Role
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 115px;" data-sort="status">
                                Status
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 145px;">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $item)
                            <tr class="odd">
                                <td class="sorting_1">
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="/admin-resources/2.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-medium">{{ $item->getFullName() }}</span>
                                            </a>
                                            <small class="text-muted">{{ $item->email }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-truncate d-flex align-items-center">
                                        <span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2">
                                            <i class="bx bx-pie-chart-alt bx-xs"></i>
                                        </span>
                                        {{ ucfirst($item->getRoleNames()->first()) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge {{ $item->custom_status->class }}">{{ $item->custom_status->name }}</span>
                                </td>
                                <td>
                                    <div class="d-inline-block text-nowrap">
                                        <button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button>

                                        <form class="btn-icon btn-sm delete-record"
                                              action="{{ route('users.destroy', $item) }}" method="get">
                                            @csrf
                                            <button class="btn" style="display: block" type="submit">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>


                                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded me-2"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="app-user-view-account.html" class="dropdown-item">View</a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Suspend
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="row mx-2">
                        @if(!$users->count())
                            <div class="col-md-12 center">
                                <p>Results not found</p>
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                Showing {{ $users->firstItem() ?: 0 }} to {{ $users->lastItem() ?: 0 }} of {{ $users->total() }} entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                @if($users->count())
                                    {{ $users->withQueryString()->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Offcanvas to add new user -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                 aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0">
                    <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
                          onsubmit="return false" novalidate="novalidate">
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="add-user-fullname">Full Name</label>
                            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe"
                                   name="userFullname" aria-label="John Doe">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="add-user-email">Email</label>
                            <input type="text" id="add-user-email" class="form-control"
                                   placeholder="john.doe@example.com" aria-label="john.doe@example.com"
                                   name="userEmail">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-contact">Contact</label>
                            <input type="text" id="add-user-contact" class="form-control phone-mask"
                                   placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com"
                                   name="userContact">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-company">Company</label>
                            <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer"
                                   aria-label="jdoe1" name="companyName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">Country</label>
                            <div class="position-relative"><select id="country"
                                                                   class="select2 form-select select2-hidden-accessible"
                                                                   data-select2-id="country" tabindex="-1"
                                                                   aria-hidden="true">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                               data-select2-id="1" style="width: 352px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-country-container"><span
                                                class="select2-selection__rendered" id="select2-country-container"
                                                role="textbox" aria-readonly="true"><span
                                                    class="select2-selection__placeholder">Select Country</span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user-role">User Role</label>
                            <select id="user-role" class="form-select">
                                <option value="subscriber">Subscriber</option>
                                <option value="editor">Editor</option>
                                <option value="maintainer">Maintainer</option>
                                <option value="author">Author</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="user-plan">Select Plan</label>
                            <select id="user-plan" class="form-select">
                                <option value="basic">Basic</option>
                                <option value="enterprise">Enterprise</option>
                                <option value="company">Company</option>
                                <option value="team">Team</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        <input type="hidden"></form>
                </div>
            </div>
        </div>
    </div>

@endsection
