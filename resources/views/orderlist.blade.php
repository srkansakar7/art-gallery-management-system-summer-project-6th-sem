<style>
    table, td, tr{
        padding: 5px;
        border: 1px solid maroon;
        border-collapse: collapse;
    }
    #m{transition: margin-left .5s;
}
    #main span{
    position: fixed;
    top: 6 ;
    left: 0;
    width: 100%;
    background-color:rgba(0, 0, 0, 0);
}
    a.goback{
    font-size:25px;
    color:red;
    position: absolute;
    top: 30px;
    right: 15;
    text-decoration: none;
    font-family: 'Arial';
}
a.goback:hover{
    font-size:25px;
    color:yellow;
    position: absolute;
    top: 30px;
    right: 15;
    text-decoration: none;
}
a{
    color:skyblue;
    text-decoration:none;
}
a:hover{
    text-decoration: none;
}
</style>
<x-adminnav />
<div id="m">
    <div id="main"><p>NOTE: As an admin you wont be able to use the add to cart function.</p>
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    <table id="o" style="color:red;">
        <tr>
            <td>Order ID</td>
            <td>User ID</td>
            <td>Product ID</td>
            <td>Status</td>
            <td>Payment Method</td>
            <td>Address</td>
            <td>Payment Status</td>
            <td>Username</td>
            </tr>
            @foreach($orders as $order)
            <tr><td>{{$order['id']}}</td>
                <td><a href="userlist">{{$order['user_id']}}</a></td>
                <td>{{$order['product_id']}}</td> 
                <td>{{$order['status']}}</td>
                <td>{{$order['payment_method']}}</td>
                <td>{{$order['address']}}</td>
                <td>{{$order['payment_status']}}</td>
           
                <td><a href={{"delete/".$order['id']}}>Delete</a></td>
            </tr>
            @endforeach
    </table>
    <a class="goback" href="admincontrol">&#8678;Back</a>
    </div></div>
<script src="{{url('/js/admincontrol.js')}}"> 
</script>