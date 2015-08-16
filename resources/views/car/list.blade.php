@extends('car.master')
@section('title', '列表页')

@section('content')
    @foreach($cars as $car)
        <div class="row">
            <div class="col-xs-2">
                <p><img src="{{ $car->icon }}" style="width: 100%;"></p>
            </div>
            <!--/.col-xs-2-->
            <div class="col-xs-6">
                <p>{{ $car->title }}</p>
                <p>诚信车商 <img src="http://img.58cdn.com.cn/ui7/car/detail/wltyear1.png" class="wlt1" title="58同城认证商家"></p>
            </div>
            <!--/.col-xs-6-->
            <div class="col-xs-2" style="text-align: center; padding-top: 30px">
                <p><strong><font color="red">{{ $car->price }}</font> </strong> 万元</p>
            </div>
            <!--/.col-xs-2-->
            <div class="col-xs-2" style="text-align: center; padding-top: 20px">
                <p>绝非事故车</p>
                <p>7天可退</p>
            </div>
            <!--/.col-xs-2-->
        </div>
        <!--/row-->
    @endforeach
@endsection

@section('sidebar')
    <h3>热门车源</h3>
    <a href="#" class="list-group-item">车源1</a>
    <a href="#" class="list-group-item">车源2</a>
    <a href="#" class="list-group-item">车源3</a>
    <a href="#" class="list-group-item">车源4</a>
    <a href="#" class="list-group-item">车源5</a>
@endsection