 
<x-adminnav />
<div id="m"><h1>ADMIN CONTROL PAGE</h1>
    <div id="main"><p>NOTE: As an admin you wont be able to use the add to cart function.</p>
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    
    </div>
</div>
    <div id="m1">
    <a href="list">Show Product List</a><br>
    <a href="add">Add Product</a><br>
    <a href="orderlist">Orders</a><br>
    <a href="userlist">Users List</a> 
    </div>    
    
<link rel="stylesheet" href="{{url('/css/admincontrol.css')}}">

<script src="{{url('/js/admincontrol.js')}}">
</script>