@extends('admin.layout.master')
@section('content')
    <link href="{{asset('css/list.css')}}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <style>
        #piechart g:hover {
            cursor: pointer;
        }

        g circle:hover {
            cursor: pointer;
        }
    </style>
    <section id="main-content">
        <section class="wrapper">
            <div class="panel panel-default">
                <h2 class="panel-heading font-weight-bold text-center text-primary">
                    THỐNG KÊ
                </h2>
                <div class="row pr-4 pl-4 mt-3">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="" id="monthly" class="text-decoration-none">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Doanh
                                                thu
                                                (Tháng)
                                            </div>
                                            <div
                                                class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($monthly_price,0 ,',' ,',')}}
                                                VNĐ
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/orders?status=2" class="text-decoration-none">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh thu
                                                (Tổng)
                                            </div>
                                            <div
                                                class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($total_price,0 ,',' ,',')}}
                                                VNĐ
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/order/list-order" class="text-decoration-none">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Thanh
                                                toán
                                                chờ phê duyệt
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$not_pay}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="admin/review" class="text-decoration-none">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Đánh
                                                giá
                                                chờ phê duyệt
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$review}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="float-right mt-2 pr-4">
                    <div id="reportrange" class="text-primary font-weight-bold"
                         style="cursor: pointer; border-radius: 5px">
                        Chọn ngày:&nbsp;
                        <i class="fa fa-calendar text-dark"></i>&nbsp;
                        <span class="text-dark font-weight-light"></span> <i class="fa fa-caret-down text-dark"></i>
                    </div>
                </div>
                <h5 class="font-weight-bold ml-4 mt-3 text-primary">
                    Doanh thu : <span class="total-revenue text-dark"></span>
                </h5>
                <div class="pl-4 mb-3 mt-3">
                    <div class="text-primary"><h5 class="font-weight-bold">Trạng thái doanh thu :</h5></div>
                    <div class="advice-content text-success" style="font-style: italic"></div>
                </div>
                <!-- Content Row -->
                <div class="pl-4 pr-4">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold text-primary">Thống kê thu nhập</h5>
                            <div class="m-0 text-secondary">Currency ( VNĐ )</div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area" style="height: 400px">
                                <div id="linechart_material"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advice ml-5 mb-4">
                    <div class="text-primary"><h5 class="font-weight-bold">Huấn luyện viên xuất sắc:</h5></div>
                    <h6 class="advice-content-best-seller" style="font-style: italic;"></h6>
                </div>
                <div class="col-5 pl-4">
                    <div class="card shadow mb-4" style="width: 650px">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold text-primary">Thống kê huấn luyện viên</h5>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div id="piechart" style="width: 600px; height: 300px" class="mr-5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="curve_chart" style="width: 900px; height: 500px"></div> -->
            @if (Session::has('message'))
                <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
            @endif
        </section>
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['line']});
        google.charts.setOnLoadCallback(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();
            $.ajax({
                url: '/api-get-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
                method: 'GET',
                success: function (resp) {
                    if (resp.length == 0) {
                        swal('No data exists for line chart', 'Please choose another time range.', 'warning');
                        return;
                    }
                    ;
                    drawChart(resp);
                    var totalRevenue = 0;
                    var lastRevenue = parseInt(resp[0].revenue);
                    var last = resp.length;
                    var firstRevenue = parseInt(resp[resp.length - 1].revenue);
                    var difference = lastRevenue - firstRevenue;
                    if (difference < 0) {
                        if (-difference > 1500000) {
                            $('.advice-content').text('Đi xuống nhưng không đáng kể => Bạn nên để ý 5 huấn luyện viên được thuê nhiều nhất để có chiến lược tiếp thị hiệu quả');
                        } else {
                            $('.advice-content').text('Đi xuống nhưng không đáng kể => Bạn không nên quá lo lắng , hãy tiếp tục truyền thông, tiếp thị');
                        }
                    }
                    if (difference > 0) {
                        if (difference > 2000000) {
                            $('.advice-content').text('Tăng lên đáng kể => Bạn đang có một chiến lược tiếp thị hiệu quả! Hãy tiếp tục cố gắng');
                        } else {
                            $('.advice-content').text('Tăng lên nhưng không đáng kể => Bạn không nên quá lo lắng , hãy tiếp tục truyền thông, tiếp thị');
                        }
                    }
                    for (var i = 0; i < resp.length; i++) {
                        totalRevenue += parseInt(resp[i].revenue);
                    }
                    ;
                    $('.total-revenue').text(totalRevenue + ' VNĐ');
                    $('.total-revenue').formatNumber();

                },
                error: function () {
                    swal('Something is wrong', 'Cannot retrieve data from API', 'error');
                }
            });
        });

        function drawChart(chart_data) {
            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Date');
            data.addColumn('number', 'Revenue');
            for (var i = 0; i < chart_data.length; i++) {
                data.addRow([new Date(chart_data[i].day), Number(chart_data[i].revenue)]);
            }
            var options = {
                chart: {},
                height: 400,
                hAxis: {
                    format: 'dd/MM/yyyy'
                }
            };
            var chart = new google.charts.Line(document.getElementById('linechart_material'));
            chart.draw(data, google.charts.Line.convertOptions(options));

            google.visualization.events.addListener(chart, 'select', selectHandler);

            function selectHandler(e) {
                for (var i = 0; i < chart.getSelection().length; i++) {
                    var item = chart.getSelection()[i];
                    window.location.href = '/admin/orders?created_at=' + chart_data[item.row].day;
                }
            }
        }

        $(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Last week': [moment().subtract(6, 'days'), moment()],
                    'Last 30 days': [moment().subtract(29, 'days'), moment()],
                    'This month': [moment().startOf('month'), moment().endOf('month')],
                    'Last month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                "firstDay": 1

            }, cb);
            cb(start, end);
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                //do something, like clearing an input
                $('#reportrange').val('');
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                $.ajax({
                    url: '/api-get-pie-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        if (resp.length == 0) {
                            swal('Không có dữ liệu', 'Hãy chọn khoảng thời gian.', 'warning');
                            return;
                        }
                        ;
                        drawPieChart(resp);
                    },
                    error: function (r) {
                        swal('Có lỗi xảy ra', 'Không lấy được dữ liệu từ api', 'error');
                    }
                });
                $.ajax({
                    url: '/api-get-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        if (resp.length == 0) {
                            swal('Không có dữ liệu', 'Hãy chọn khoảng thời gian.', 'warning');
                            return;
                        }
                        ;
                        drawChart(resp);
                        var totalRevenue = 0;
                        var lastRevenue = parseInt(resp[0].revenue);
                        var last = resp.length;
                        var firstRevenue = parseInt(resp[resp.length - 1].revenue);
                        var difference = lastRevenue - firstRevenue;
                        if (difference < 0) {
                            if (-difference > 1500000) {
                                $('.advice-content').text('Đi xuống nhưng không đáng kể => Bạn nên để ý 5 huấn luyện viên được thuê nhiều nhất để có chiến lược tiếp thị hiệu quả');
                            } else {
                                $('.advice-content').text('Đi xuống nhưng không đáng kể => Bạn không nên quá lo lắng , hãy tiếp tục truyền thông, tiếp thị');
                            }
                        }
                        if (difference > 0) {
                            if (difference > 2000000) {
                                $('.advice-content').text('Tăng lên đáng kể => Bạn đang có một chiến lược tiếp thị hiệu quả! Hãy tiếp tục cố gắng');
                            } else {
                                $('.advice-content').text('Tăng lên nhưng không đáng kể => Bạn không nên quá lo lắng , hãy tiếp tục truyền thông, tiếp thị');
                            }
                        }
                        for (var i = 0; i < resp.length; i++) {
                            totalRevenue += parseInt(resp[i].revenue);
                        }
                        ;
                        $('.total-revenue').text(totalRevenue + ' VNĐ');
                        $('.total-revenue').formatNumber();
                    },
                    error: function () {
                        swal('Action failed', 'Cannot retrieve data from API', 'error');
                    }
                });
            });

        });
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();
            $.ajax({
                url: '/api-get-pie-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
                method: 'GET',
                success: function (resp) {
                    if (resp.length == 0) {
                        swal('No data exists for pie chart', 'Please choose another time range.', 'warning');
                        return;
                    }
                    ;
                    // console.log(resp);
                    drawPieChart(resp);
                },
                error: function (r) {
                    swal('Something is wrong', 'Cannot retrieve data from API', 'error');
                }
            });
        });

        function drawPieChart(chart_data) {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Product Name');
            data.addColumn('number', 'Quantity');
            for (var i = 0; i < 5; i++) {
                data.addRow([chart_data[i].product.name, Number(chart_data[i].totalQuantity)]);
            }
            ;
            var rest = 0;
            for (var i = 5; i < chart_data.length; i++) {
                rest += Number(chart_data[i].totalQuantity);
            }
            ;
            var all = 0;
            for (var i = 0; i < chart_data.length; i++) {
                all += Number(chart_data[i].totalQuantity);
            }
            ;
            var percentage1 = (chart_data[0].totalQuantity / all) * 100;
            if (percentage1 <= 20) {
                $('.advice-content-best-seller').html('<span>The <a href="' + '/admin/orders?personal_training_id=' + chart_data[0].product.id + '">' + chart_data[0].product.name + '</a> đang làm rất tốt nhưng so với tất cả phần trăm không quá lớn. </span>');
            } else if (percentage1 < 50 && percentage1 > 20) {
                $('.advice-content-best-seller').html('<span>The <a href="' + '/admin/orders?personal_training_id=' + chart_data[0].product.id + '">' + chart_data[0].product.name + '</a> đang làm rất tốt thời gian này. </span>');
            } else if (percentage1 <= 50) {
                $('.advice-content-best-seller').html('<span>The <a href="' + '/admin/orders?personal_training_id=' + chart_data[0].product.id + '">' + chart_data[0].product.name + '</a> chiếm hơn một nửa doanh số của bạn, bạn không chỉ nên nhập khẩu nhiều hơn mà còn quảng bá các sản phẩm khác nữa. <a href="' + '/admin/order?product_id=' + chart_data[1].product_id + '">' + chart_data[1].product.name + '</span>');
            }
            data.addRow(['Huấn luyện viên khác', rest]);
            var options = {
                title: '5 Best-sellers'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);

            google.visualization.events.addListener(chart, 'select', selectHandler);

            function selectHandler(e) {
                for (var i = 0; i < chart.getSelection().length; i++) {
                    var item = chart.getSelection()[i];
                    window.location.href = '/admin/orders?personal_training_id=' + chart_data[item.row].product.id;
                }
            }
        }
        $('#monthly').attr('href', 'admin/orders?startDate=' + moment().startOf('month').format('YYYY-MM-DD') + '&endDate=' + moment().endOf('month').format('YYYY-MM-DD'))
    </script>
@endsection
