@extends('client.layout.master')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success text-center">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container" style="padding-left: 10% ;margin-top: 80px">
        <div class="row no-gutters">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img width="100%" height="auto"
                             src="{{$personalTraining->image}}" alt="">
                    </div>
                </div><!--inner-->
            </div><!-- col-sm-6  -->
            <div class="col-sm-6 ml-5">
                <div class="star-ratings-sprite-pt-detail"><span style="width:{{$personalTraining->rating}}%"
                                                                 class="star-ratings-sprite-rating-pt-detail"></span>
                </div>
                <div class="text-secondary">({{count($review)}} đánh giá)</div>
                <div class="pt-2"><h1>{{$personalTraining->name}}</h1></div>
                <div class="text-secondary"><h5
                            class="category-name">@foreach($list as $item){{$item->name}}, @endforeach</h5>
                </div>
                <div class="row">
                    <div class="col-sm-7 mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="dropdown w-25">
                                        <button id="dLabel" class="dropdown-select font-weight-bolder" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Thời Gian
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu w-25" aria-labelledby="dLabel">
                                            @foreach($durations as $duration)
                                                <li class="duration">{{$duration->duration}}</li>
                                                <span class="d-none duration_id">{{$duration->id}}</span>
                                                <span class="d-none duration_price">{{$duration->price}}</span>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 ml-3 row">
                    <div class="row list-time" style="width: 100%">
                        @foreach($times as $time)
                            <button class="col-6 time btn btn-secondary">{{$time->time}}</button>
                            <span class="d-none time_id">{{$time->id}}</span>
                            <span class="d-none">{{$time->status}}</span>
                        @endforeach
                    </div>
                </div>
                <div style="margin-left: 0.5%;margin-top: 9%">
                    <form action="{{route('order.store')}}" method="post">
                        @csrf
                        <input type="text" class="d-none" name="user_id">
                        <input type="text" class="d-none" name="personal_training_id" value="{{$personalTraining->id}}">
                        <input type="text" class="d-none" name="personal_training_time_id">
                        <input type="text" class="d-none" name="time">
                        <input type="text" class="d-none" name="duration_id">
                        <input type="text" class="d-none" name="duration">
                        <input type="text" class="d-none" name="pt-name" value="{{$personalTraining->name}}">
                        <input type="text" class="d-none" name="price">
                        <button type="submit" class="btn btn-outline-primary w-100" style="font-size: 20px">
                            ĐẶT LỊCH
                        </button>
                    </form>
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
    <div class="accordion container" id="accordionExample" style="margin-top: 10%">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" style="text-decoration: none;font-size: 22px;line-height: 26px;"
                            type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                        Giới thiệu
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p><b>Tiểu sử:</b> {{$personalTraining->description}}</p>
                    <p><b>Trình độ chyên môn:</b> {{$personalTraining->qualification}}</p>
                    <p><b>Kinh nghiệm:</b> {{$personalTraining->experience}}</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed"
                            style="text-decoration: none;font-size: 22px;line-height: 26px;" type="button"
                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                        Đánh giá ({{count($review)}})
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    @foreach($review as $item)
                        <div class="row">
                            <div class="col-sm-1">
                                @if($item->user->gender=='0')
                                    <img width="60px" height="60px" src="https://www.w3schools.com/howto/img_avatar.png"
                                         alt="">
                                @else
                                    <img width="60px" height="60px"
                                         src="https://www.w3schools.com/howto/img_avatar2.png"
                                         alt="">
                                @endif
                            </div>
                            <div class="col-sm-11">
                                <div class="row">
                                    <div class="star-ratings-sprite-pt-detail"><span style="width:{{$item->rating}}%"
                                                                                     class="star-ratings-sprite-rating-pt-detail"></span>
                                    </div>

                                </div>
                                <div class="row ml-1">
                                    <div class="row">
                                        <div class="nameuser "><strong
                                                    style="color: black"> {{$item->user->firstName}} {{$item->user->lastName}} </strong>
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <div style="width: 90%;display: inline-block">
                                            {{$item->review}}
                                        </div>
                                    </div>
                                </div>
                                <div
                                        style="float: right;display: inline">{{date_format($item->created_at,'d-m-Y')}}</div>
                            </div>
                        </div>
                    @endforeach

                    <hr class="coll-divider short-bg-line center">

                    <div class="mt-4">
                        <div style="font-size: 28px ;color: black">Thêm một bài đánh giá</div>
                    </div>
                    <hr class="coll-divider short-bg-line center">
                    @if (\Illuminate\Support\Facades\Auth::check())

                        <form action=" {{route('review.store')}}" method="POST">
                            @csrf
                            <div>
                                <input type="hidden" name="personalTraining-id" value="{{$personalTraining->id}}">
                                <!-- Default form contact -->
                                <div class="rate">
                                    <span style="font-size: 21px;color: black"> Đánh giá</span>
                                    <input type="radio" id="star5" name="rate" value="5"/>
                                    <label for="star5" title="text">5</label>
                                    <input type="radio" id="star4" name="rate" value="4"/>
                                    <label for="star4" title="text">4</label>
                                    <input type="radio" id="star3" name="rate" value="3"/>
                                    <label for="star3" title="text">3</label>
                                    <input type="radio" id="star2" name="rate" value="2"/>
                                    <label for="star2" title="text">2</label>
                                    <input type="radio" id="star1" name="rate" value="1"/>
                                    <label for="star1" title="text">1</label>
                                </div>
                                <div class="mt-5">
                                    <div class="form-group">
                                        <label style="font-size: 21px;color: black">Review</label>
                                        <textarea style="height:300px" class="form-control"
                                                  name="review" cols="10" rows="7"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn-review btn btn-dark"
                                            style="height: 50px;width: 180px"> GỬI
                                    </button>
                                </div>
                            </div>
                        </form>
                    @else
                        <div style="text-align: center">
                            <h2>Vui lòng đăng nhập </h2>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
        <div style="position: fixed;top: 89%;left: 3% ;z-index: 10;"
             class="alert alert-success alert-dismissible fade show"
             role="alert">
            <strong> Thông báo</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection

