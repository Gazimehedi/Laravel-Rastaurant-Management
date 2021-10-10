<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                @foreach ($food as $item)
                    <div class="item">
                        <div style='background-image:url("media/food/{{$item->image}}")' class='card'>
                            <div class="price"><h6>${{$item->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$item->title}}</h1>
                              <p class='description'>{{$item->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                        <form action="{{url('/add_to_cart',$item->id)}}" method="post">
                            @csrf
                            <div class="menu-cart d-flex justify-content-between">
                                <input type="hidden" name="food_id" value="{{$item->id}}"> 
                                <input style="width:80px;padding-left:10px" type="number" name="quantity" value="1"> 
                                <input class="btn menu-cart-btn" type="submit" value="add to cart" >
                            </div>
                        </form>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>