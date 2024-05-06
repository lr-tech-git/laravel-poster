@extends('layouts.app-admin')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>{{ __('admin-main.complaints.session') }}</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">21,459</h4>
                                    <small class="text-success">(+29%)</small>
                                </div>
                                <p class="mb-0">{{ __('admin-main.complaints.total_users') }}</p>
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
                                <span>{{ __('admin-main.complaints.paid_users') }}</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">4,567</h4>
                                    <small class="text-success">(+18%)</small>
                                </div>
                                <p class="mb-0">{{ __('admin-main.complaints.last_week_analytics') }} </p>
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
                                <span>{{ __('admin-main.complaints.active_users') }}</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">19,860</h4>
                                    <small class="text-danger">(-14%)</small>
                                </div>
                                <p class="mb-0">{{ __('admin-main.complaints.last_week_analytics') }}</p>
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
                                <span>{{ __('admin-main.complaints.pending_users') }}</span>
                                <div class="d-flex align-items-end mt-2">
                                    <h4 class="mb-0 me-2">237</h4>
                                    <small class="text-success">(+42%)</small>
                                </div>
                                <p class="mb-0">{{ __('admin-main.complaints.last_week_analytics') }}</p>
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

        <!-- Complains List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title">{{ __('admin-main.complaints.complaints_list') }}</h5>
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
                                <div class="col-sm-2 user_status" style="margin-left: 15px">
                                    <select id="filter-status" class="form-select text-capitalize">
                                        <option value="">{{ __('admin-main.complaints.select_status') }}</option>
                                        @foreach(App\Enum\UserStatusesEnum::cases() as $status)
                                            <option value="{{ $status->value }}" class="text-capitalize">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="dt-buttons">
                                    <button
                                        class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary mx-3"
                                        tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                        aria-haspopup="dialog" aria-expanded="false"><span><i
                                                class="bx bx-export me-1"></i>{{ __('admin-main.complaints.export') }}</span><span
                                            class="dt-down-arrow">▼</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-users table border-top dataTable no-footer dtr-column"
                           id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1390px;">
                        <thead>
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label="">
                                    <input type="checkbox" class="form-check-input">
                                </th>
                                <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 570px;" aria-label="Course Name: activate to sort column ascending" aria-sort="descending">Title</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 118px;" aria-label="Time: activate to sort column ascending">Created</th>
                                <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 373px;" aria-label="Progress: activate to sort column ascending">Statistics</th>
                                <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 373px;" aria-label="Status: activate to sort column ascending"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($complaints as $complaint)
                                @php
                                    $complaintStats = \App\Helpers\ComplaintHelper::getReviewStats($complaint);
                                @endphp
                                <tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                    <td class="sorting_1">
                                        <a href="{{ $complaint->getUrl() }}" target="_blank">
                                            {{ $complaint->getTitle() }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $complaint->getCreatedAt() }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="w-px-50 d-flex align-items-center">
                                                <i class="bx bx-user bx-xs me-2 text-primary"></i>{{ $complaintStats['review_count'] }}
                                            </div>
                                            <div class="w-px-50 d-flex align-items-center">
                                                <i class="bx bxs-book-open bx-xs me-2 text-info"></i>48
                                            </div>
                                            <div class="w-px-50 d-flex align-items-center">
                                                <i class="bx bx-comment bx-xs me-2 text-danger"></i>43
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ $complaint->getUrl() }}" class="btn btn-primary btn-sm" target="_blank">{{ __('admin-main.complaints.show') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row mx-2">
                        @if(!$complaints->count())
                            <div class="col-md-12 center">
                                <p>{{ __('admin-main.complaints.results_not_found') }}</p>
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                @if($complaints->count())
                                    {{ $complaints->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
