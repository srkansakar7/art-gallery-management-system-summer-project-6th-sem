<style>
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

a:hover{
    text-decoration: none;
}
</style>
<x-adminnav />
<div id="m">
    <div id="main"><p>NOTE: As an admin you wont be able to use the add to cart function.</p>
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    
<form action="add" method="POST">
@csrf
<table id="form">
<tr><td>Enter Product Name:</td></tr><tr><td><input type="text" name="name"><br></td></tr>
<tr><td>Enter Category:</td></tr><tr><td><input type="text" name="category"></td></tr>
<tr><td>Enter Price:</td></tr><tr><td><input type="number" name="price"></td></tr>
<tr><td>Enter Description:</td></tr><tr><td><input type="text" name="description"></td></tr>
<tr><td>Enter Image Destination Source:</td></tr><tr><td><input type="text" name="gallery"></td></tr>
<tr><td>Enter Seller Name:</td></tr><tr><td><input type="text" name="seller"></td></tr>
<tr><td><button type="submit">ADD</button></td></tr><tr>
<td><button type="reset">RESET</button></table></td></tr>

</form>
<a class="goback" href="admincontrol">&#8678;Back</a>
</div></div>
<script src="{{url('/js/admin.js')}}"> 
</script>