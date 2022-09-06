@extends("layouts.sidebar")

@section('content')
    <div class="row mb-32 gy-32">
        <div class="col-12">
            <h3>Welcome back, {{Auth::user()->name}}👋</h3>
            <p class="hp-p1-body mb-0">Your current status and analytics are here</p>
        </div>

        <div class="col-12">
            <div class="row g-32">
                <div class="col flex-grow-1 overflow-hidden">
                    <div class="row g-32">
                        <div class="col-12">
                            <div class="card hp-card-1 hp-upgradePlanCardOne">
                                <div class="position-absolute top-0 start-0 w-100 h-100 hp-upgradePlanCardOne-bg hp-dark-none" style="background-image: url(https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-payment-bg.svg); background-size: cover; background-position: right center; z-index: -1;"></div>
                                <div class="position-absolute top-0 start-0 w-100 h-100 hp-upgradePlanCardOne-bg hp-dark-block" style="background-image: url(../../../app-assets/img/dasboard/analytics-payment-bg-dark.png); background-size: cover; background-position: right center; z-index: -1;"></div>

                                <div class="card-body">
                                    <div class="row align-items-center mt-8">
                                        <div class="col-12 mb-4">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col flex-grow-1">
                                                    <h4 class="mb-8">Get exclusive discounts for any product</h4>
                                                    <p class="hp-p1-body mb-0">by upgrading your plan to premium</p>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <button type="button" class="btn mt-16 mt-sm-0 text-primary hp-bg-dark-primary-1 hp-border-color-dark-primary-1 hp-text-color-dark-0">
                                                        <span>Upgradge Now</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

{{--                        <div class="col-12">--}}
{{--                            <div class="card hp-card-6 hp-chart-text-color">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row justify-content-between">--}}
{{--                                        <div class="col-6">--}}
{{--                                            <h5 class="me-8">Visiters</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div id="analytics-visiters-chart"></div>--}}
{{--                                    {!! $chart->container() !!}--}}
{{--                                </div>--}}
{{--                          '''[  </div>--}}
{{--                        </div>--}}

                        <div class="col-12 col-xl-4">
                            <div class="card hp-card-2">
                                <div class="card-body px-16">
                                    <div class="row justify-content-between mb-8">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <h5 class="me-8 mb-0">All Expenses</h5>
                                            </div>
                                        </div>

                                        <div class="col-6 hp-flex-none w-auto">
                                        </div>
                                    </div>

                                    <div class="row align-items-center g-16">
                                        <div class="col-6">
                                            <p class="hp-badge-text mb-0 text-black-80 hp-text-color-dark-30">
                                              This week Expenses
                                            </p>

                                            <h2 class="my-4">₦{{number_format(intval($customer['week'] *1),2)}}</h2>

                                            <div class="d-flex align-items-center">
                                                <i class="ri-arrow-right-up-line text-success" style="font-size: 16px;"></i>
                                                <p class="mb-0 hp-badge-text text-success">10%</p>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div id="statistics-traffic"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            <div class="card hp-card-2">
                                <div class="card-body">
                                    <div class="row justify-content-between mb-32">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <h5 class="me-8 mb-0">Statistics</h5>
                                            </div>
                                        </div>

                                        <div class="col-6 hp-flex-none w-auto">
                                            <p class="hp-caption-text text-black-80 hp-text-color-dark-30">Updated Every Day</p>
                                        </div>
                                    </div>

                                    <div class="row g-32">
                                        <div class="col-6 col-sm-3">
                                            <div class="row gx-8 gy-16">
                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-primary-4 hp-bg-dark-primary rounded-circle">
                                                        <i class="ri-wallet-2-fill text-primary hp-text-color-dark-primary-2" style="font-size: 24px;"></i>
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <h5 class="mb-4">₦{{number_format(intval(\Illuminate\Support\Facades\Auth::user()->wallet *1))}}</h5>
                                                    <p class="hp-badge-text mb-0 text-black-80 hp-text-color-dark-30">
                                                       Wallet Balance
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-sm-3">
                                            <div class="row gx-8 gy-16">
                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-warning-4 hp-bg-dark-warning rounded-circle">
                                                        <i class="ri-wallet-3-fill text-warning" style="font-size: 24px;"></i>
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <h5 class="mb-4">₦{{number_format(intval($customer['deposit'] *1))}}</h5>
                                                    <p class="hp-badge-text mb-0 text-black-80 hp-text-color-dark-30">
                                                      Total Deposit
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-sm-3">
                                            <div class="row gx-8 gy-16">
                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-secondary-4 hp-bg-dark-secondary rounded-circle">
                                                        <i class="ri-wallet-line text-secondary" style="font-size: 24px;"></i>
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <h5 class="mb-4">₦{{number_format(intval($customer['bill'] *1))}}</h5>
                                                    <p class="hp-badge-text mb-0 text-black-80 hp-text-color-dark-30">
                                                        Total Purchase
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-sm-3">
                                            <div class="row gx-8 gy-16">
                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-danger-4 hp-bg-dark-danger rounded-circle">
                                                        <i class="ri-wallet-line text-danger" style="font-size: 24px;"></i>
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <h5 class="mb-4">₦{{number_format(intval($customer['charge'] *1))}}</h5>
                                                    <p class="hp-badge-text mb-0 text-black-80 hp-text-color-dark-30">
                                                        Total Charges
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-32 justify-content-between">
                                        <div class="col-12 col-md-6">
                                            <h5>Our Product Serves</h5>
{{--                                            <p class="hp-p1-body text-black-60 hp-text-color-dark-50 mb-0">Highest income this month</p>--}}
                                            <div class="d-flex align-items-center flex-wrap">
{{--                                                <h4 class="mb-0">$442.98</h4>--}}
                                                <p class="hp-p1-body text-black-60 hp-text-color-dark-50 ms-8 mb-0">Data Refill | Airtime | Cable TV | Electricity Subscription</p>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <h5 class="text-center">Marketing team</h5>

                                            <div class="row g-8 align-items-center justify-content-center">
                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center bg-primary-3 rounded-circle" style="width: 36px; height: 36px;">
                                                        <img src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-marketing-team-1.svg">
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center bg-info-3 rounded-circle" style="width: 36px; height: 36px;">
                                                        <img src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-marketing-team-2.svg">
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center bg-black-60 rounded-circle" style="width: 36px; height: 36px;">
                                                        <img src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-marketing-team-3.svg">
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center bg-danger-3 rounded-circle" style="width: 36px; height: 36px;">
                                                        <img src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-marketing-team-4.svg">
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center bg-secondary-3 rounded-circle" style="width: 36px; height: 36px;">
                                                        <img src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-marketing-team-5.svg">
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <div class="avatar-item d-flex align-items-center justify-content-center bg-warning-3 rounded-circle" style="width: 36px; height: 36px;">
                                                        <img src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-marketing-team-6.svg">
                                                    </div>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <i class="ri-arrow-right-line hp-text-color-dark-30" style="font-size: 24px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm-2">
                                            <h5>Earnings</h5>
                                            <p class="hp-p1-body text-black-60 hp-text-color-dark-50 mb-0">This month</p>
                                            <h4 class="mb-0">$6.340.42</h4>
                                        </div>

                                        <div class="col-12 col-sm-10 overflow-hidden">
                                            <div id="earnings-chart" class="w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card hp-project-table-card hp-analytics-project-table-card">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-between mb-8">
                                        <div class="col hp-flex-none w-auto">
                                            <h5 class="mb-0">Projects</h5>
                                        </div>

                                        <div class="col hp-flex-none w-auto">
                                            <i class="ri-more-fill hp-text-color-dark-0" style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead>
                                            <tr>
                                                <th>
                                                    <span class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">#</span>
                                                </th>
                                                <th style="min-width: 150px;">
                                                    <span class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Project Name</span>
                                                </th>
                                                <th style="min-width: 150px;">
                                                    <span class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Start Date</span>
                                                </th>
                                                <th style="min-width: 150px;">
                                                    <span class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">End Date</span>
                                                </th>
                                                <th>
                                                    <span class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Status</span>
                                                </th>
                                                <th style="min-width: 150px;">
                                                    <span class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Assign</span>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>
                                                    <span class="mb-0 fw-medium text-black-100 hp-text-color-dark-0">1</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Yoda React</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/05/2021</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/08/2021</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-4 hp-bg-dark-primary text-primary hp-text-color-dark-primary-2 border-primary hp-border-color-dark-primary-2">Work</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Justin Botosh</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="mb-0 fw-medium text-black-100 hp-text-color-dark-0">2</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Leia Html</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/04/2021</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/06/2021</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary-4 hp-bg-dark-secondary text-secondary border-secondary">Review</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Leo Stanton</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="mb-0 fw-medium text-black-100 hp-text-color-dark-0">3</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Yoda Vue</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/09/2021</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/12/2021</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-4 hp-bg-dark-danger text-danger border-danger">Soon</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Mira Korsgaard</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="mb-0 fw-medium text-black-100 hp-text-color-dark-0">4</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Yoda Bootstrap</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/09/2021</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/12/2021</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-4 hp-bg-dark-danger text-danger border-danger">Soon</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Miracle Gouse</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="mb-0 fw-medium text-black-100 hp-text-color-dark-0">5</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Yoda Angular</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/09/2021</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">12/12/2021</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-4 hp-bg-dark-danger text-danger border-danger">Soon</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Miracle Gouse</span>
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
                <div class="col hp-analytics-col-2">
                    <div class="row g-32">
                        <div class="col-12">
                            <div class="card hp-card-6">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row justify-content-between align-item-start">
                                                <div class="col hp-flex-none w-auto">
                                                    <h5 class="mb-32">Expenses</h5>
                                                </div>

                                                <div class="col hp-flex-none w-auto">
                                                    <i class="ri-more-fill hp-text-color-dark-0" style="font-size: 24px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div id="expenses-donut-card" class="hp-donut-chart clientsChart" style="width: 360px;"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card border-none hp-card-2 px-12 py-16 hp-upgradePlanCardOne">
                                <div class="position-absolute top-0 start-0 w-100 h-100 hp-dark-none" style="background-image: url(../../../app-assets/img/dasboard/analytics-download-bg.png); background-size: cover; background-position: right center; z-index: -1;"></div>
                                <div class="position-absolute top-0 start-0 w-100 h-100 hp-dark-block" style="background-image: url(../../../app-assets/img/dasboard/analytics-download-bg-dark.png); background-size: cover; background-position: right center; z-index: -1;"></div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="mb-0 text-black-0">Check the Best Prices of New Models &amp; Boost Your Business</h5>

                                            <button type="button" class="btn mt-32 border-primary bg-black-0 hp-bg-color-dark-primary-1 text-primary hp-text-color-dark-0">
                                                <i class="iconly-Light-Download remix-icon"></i>
                                                <span>Download</span>
                                            </button>
                                        </div>

                                        <div class="col hp-flex-none w-auto position-absolute top-0 end-0 h-100 pe-0">
                                            <img src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/dasboard/analytics-download-vector.svg" class="h-100 hp-dir-scale-x-n1" alt="Check the Best Prices of New Models &amp; Boost Your Business">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card hp-card-6 hp-donut-chart">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <h5 class="me-8 mb-0">Revenue</h5>
                                                <p class="hp-badge-text mb-0">Last 6 Months</p>
                                            </div>
                                        </div>

                                        <div class="col-6 hp-flex-none w-auto">
                                            <div class="dropdown">
                                                <button class="btn btn-text btn-icon-only p-0 mt-n8" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill hp-text-color-dark-0 remix-icon" style="font-size: 24px;"></i>
                                                </button>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" aria-current="false" href="javascript:;">Last 28 Days</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" aria-current="false" href="javascript:;">Last Month</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" aria-current="false" href="javascript:;">Last Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="analytics-revenue-2-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable();
        });

        $(".jsonExport").on("click", function () {
            $(".dataTable").tableHTMLExport({ type: "json", filename: "file.json",});
        });
        $(".csvExport").on("click", function () {
            $(".dataTable").tableHTMLExport({ type: "csv", filename: "file.csv" });
        });
        $(".pdfExport").on("click", function () {
            $(".dataTable").tableHTMLExport({ type: "pdf", filename: "file.pdf" });
        });

        // Transactions Bar Chart
        let transactionChartSeries = [{
            name: 'Successful',
            data: [600000000, 750000000, 550000000, 600000000, 900000000, 750000000, 600000000, 900000000, 806000000, 550000000, 400000000, 950000000]
        }, {
            name: 'Failed',
            data: [300000000, 350000000, 550000000, 800000000, 200000000, 430000000, 550000000, 600000000, 906000000, 150000000, 350000000, 550000000]
        }, {
            name: 'Pending',
            data: [500000000, 750000000, 250000000, 100000000, 700000000, 130000000, 650000000, 350000000, 656000000, 120000000, 170000000, 320000000]
        }];

        let transactionChartMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        let transactionChartSelector = 'transactionBarChart';
        barChartFunc(transactionChartSeries, transactionChartMonths, transactionChartSelector);


        // Clients Pie Chart
        let clientsPieChartSeries = [{{$customer['deposit']}}, {{$customer['bill']}}];
        let clientsPieChartLabels = ['Active', 'Inactive'];
        let clientsPieChartSelector = 'clientsChart';
        pieChartFunc(clientsPieChartSeries, clientsPieChartLabels, clientsPieChartSelector);
    </script>

@endsection
