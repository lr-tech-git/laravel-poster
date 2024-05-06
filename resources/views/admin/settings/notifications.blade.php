@extends('layouts.app-admin')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row g-4">

            @include("admin.settings._menu")

            <!-- Options -->
            <div class="col-12 col-lg-8 pt-4 pt-lg-0">
                <div class="tab-content p-0">
                    <!-- Notification Tab -->
                    <div class="tab-pane fade show active" id="notifications" role="tabpanel">
                        <div class="card mb-4">
                            <div class="card-body">

                                <h5 class="card-title mb-2">Customer</h5>
                                <div class="card border shadow-none mb-4">
                                    <div class="table-responsive rounded">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th class="text-nowrap w-50">Type</th>
                                                <th class="text-nowrap text-center w-25">Email</th>
                                                <th class="text-nowrap text-center w-25">App</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-nowrap">New customer sign up</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_cust_1" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_cust_2" checked />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">Customer account password reset</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_cust_4" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_cust_5" checked />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-transparent">
                                                <td class="text-nowrap">Customer account invite</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_cust_7" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_cust_8" />
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <h5 class="card-title mb-2">Orders</h5>
                                <div class="card border shadow-none mb-4">
                                    <div class="table-responsive rounded">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th class="text-nowrap w-50">Type</th>
                                                <th class="text-nowrap text-center w-25">Email</th>
                                                <th class="text-nowrap text-center w-25">App</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-nowrap">Order purchase</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_1" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_2" checked />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">Order cancelled</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_4" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_5" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">Order refund request</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_7" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_8" checked />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">Order confirmation</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_9" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_10" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-transparent">
                                                <td class="text-nowrap">Payment error</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_11" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_order_12" />
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <h5 class="card-title mb-2">Shipping</h5>
                                <div class="card border shadow-none">
                                    <div class="table-responsive rounded">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th class="text-nowrap w-50">Type</th>
                                                <th class="text-nowrap text-center w-25">Email</th>
                                                <th class="text-nowrap text-center w-25">App</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-nowrap">Picked up</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_ship_1" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_ship_2" checked />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">Shipping update</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_ship_3" checked />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_ship_4" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-transparent">
                                                <td class="text-nowrap">Delivered</td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_ship_5" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="defaultCheck_ship_6" checked />
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-3">
                            <button type="button" class="btn btn-label-secondary">Discard</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Options-->
        </div>


    </div>

@endsection
