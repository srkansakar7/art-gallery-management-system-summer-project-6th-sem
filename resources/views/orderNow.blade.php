<title>Order Detail Page</title>
<x-navigation />
<div id="m">
    <div id="main">
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>
    @extends('masterstyle')
    <a class="goback" href="cartList" style="font-size:18px;font-family: 'Candara';">&#8678;Go Back</a>
    <br><br>
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>Rs. {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rs. 0</td>
                </tr>
                <tr>
                    <td>Delivery Charge</td>
                    <td>Rs. 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                <td>Rs. {{$total+10}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="orderplace" method="POST" >
                @csrf
                <div class="form-group">
                   
                </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method:</label> <br> <br>
                        <input type="radio" value="e-Sewa" name="payment"> <span>e-Sewa</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>PayPal payment</span> <br><br>
                        <input type="radio" value="cash on delivery" name="payment"> <span>Payment on Delivery</span> <br> <br>
                    </div>
                    <button type="submit" class="btn btn-default">Order Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{url('/js/gallery.js')}}">

</script>