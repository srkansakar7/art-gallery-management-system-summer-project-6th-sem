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

a:hover{
    text-decoration: none;
}
</style>
<x-adminnav />
<div id="m">
    <div id="main"><p>NOTE: As an admin you wont be able to use the add to cart function.</p>
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    <table style="color:red;">
            <tr><td>ID</td>
                <td>Name</td>
                <td>Category</td>
                <td>Price</td>
                <td>Description</td>
                <td>Gallery</td>
                <td>Seller</td>
                <td>Actions</td>
            </tr>
            @foreach($products as $product)
            <tr><td>{{$product['id']}}</td>
                <td>{{$product['name']}}</td> 
                <td>{{$product['category']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['gallery']}}</td>
                <td>{{$product['seller']}}</td>
                <td><a href={{"delete/".$product['id']}}>Delete</a></td>
            </tr>
            @endforeach
    </table>
    <a class="goback" href="admincontrol">&#8678;Back</a>
    </div></div>
<script src="{{url('/js/admincontrol.js')}}"> 
</script>