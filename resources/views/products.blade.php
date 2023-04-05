@extends('layouts.home')
@section('content')
<link rel="stylesheet" type="text/css" href="front/styles/product.css">
<link rel="stylesheet" type="text/css" href="front/styles/product_responsive.css">
<body>
    <div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(front/images/categories.jpg)"></div>
		
		</div>
	</div>
    <div class="super_container">
        <!-- Home -->
        <!-- Product Details -->
    
        <div class="product_details">
            <div class="container">
                <div class="row details_row">
    
                    <!-- Product Image -->
                    @foreach($posts as $post)
                    <div class="col-lg-6">
                        <div class="details_image">
                            <div class="details_image_large"><img src="{{$post['image']}}" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
                            
                        </div>
                    </div>
                    <!-- Product Content -->
                    <div class="col-lg-6">
                        <div class="details_content">
                            <div class="details_name">{{$post['decor']}}</div>
                            <div class="details_price">{{$post['price']}}</div>
    
                            <!-- In Stock -->
                            <div class="in_stock_container">
                                <div class="availability">{{$post['availability']}}</div>
                                <span>На складе</span>
                            </div>
                            <div class="details_text">
                                <p>Длина : {{$post['length']}}</p>
                                <p>Ширина : {{$post['width']}}</p>
                                <p>Толщина : {{$post['thickness']}}</p>
                                <p>Производитель : {{$post['manufacturer']}}</p>
                                <p>Покрытие : {{$post['coating']}}</p>
                            </div>
    
                            <!-- Product Quantity -->
                            <div class="product_quantity_container">
                                <div class="product_quantity clearfix">
                                    <span>Кол-во</span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="false"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="false"></i></div>
                                    </div>
                                </div>
                                <div class="button cart_button"><a href="#">Добавить в Корзину</a></div>
                            </div>
    
                            <!-- Share -->
                          
                        </div>
                    </div>
                    @endforeach	
                </div>
    

        </div>  
@endsection