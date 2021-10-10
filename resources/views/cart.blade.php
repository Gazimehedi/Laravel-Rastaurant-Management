    @php
        $page_title = "Cart Page";
    @endphp
    @include('layouts.header')
    <!-- ***** Header Area End ***** -->
    <section class="section" style="margin-top:100px;margin-bottom:200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                    @if (count($cart)>0)
                        <h2>Cart Items</h2>
                    @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    @php
                        $userId = 0;
                        if(isset($cart[0])){
                            $userId = $cart[0]->user_id;
                        }
                    @endphp
                    <form action="{{url('orderproccess',$userId)}}" method="post">
                        @csrf
                    @if (count($cart)>0)
                        <table class="table bg-white">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">User ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Food Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $cartTotal = 0;
                                @endphp
                            @foreach ($cart as $item)
                                @php
                                    $cartTotal = $cartTotal+$item->price*$item->quantity;
                                @endphp
                                <tr>
                                    <td><a class="btn btn-danger" href="{{url('cart/delete/'.$item->id)}}">X</a></td>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->user_id}}</td>
                                    <td><img style="width:60px;height:60px;border-radius:10px;" src="{{asset('media/food/'.$item->image)}}" alt="{{$item->title}}"></td>
                                    <td>
                                        {{$item->title}}
                                        <input type="hidden" name="foodname[]" value="{{$item->title}}">
                                    </td>
                                    <td>
                                        ${{$item->price}}
                                        <input type="hidden" name="price[]" value="{{$item->price}}">
                                    </td>
                                    <td><input onchange="manageqty({{$item->id}})" style="width:80px;" type="number" name="quantity[]" value="{{$item->quantity}}" id="qty_{{$item->id}}"></td>
                                    <td>${{$item->price*$item->quantity}}</td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Cart Total :</td>
                                    <td>${{$cartTotal}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <a href="javascript:void(0)" id="ordernow" class="btn btn-lg menu-cart-btn">Order Now</a>
                        </div>
                        @else
                            <div style="margin-bottom:100px" class="text-center mt-5">
                                <h2 class="h2 mt-5">Cart Empty</h2>
                            </div>
                        @endif
                        <div id="checkout" class="row  d-none card mt-5">
                            <div class="col-md-12 mt-4">
                                <h2 class="h2">Billing Address</h2>
                                <div class="row">
                                    <div class="col">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                                    </div>
                                    <div class="col">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                                    </div>
                                    <div class="col">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter address">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-lg btn-info" >Order Confirm</button>&nbsp;&nbsp;
                                        <a href="javascript:void(0)" class="btn btn-danger btn-lg" id="hidecheckout" >Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    @include('layouts.footer')