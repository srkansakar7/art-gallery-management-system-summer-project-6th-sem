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
        <tr>
            <td>User ID</td>
            <td>Username</td>
            <td>Contact</td>
            <td>Address</td>
            <td>Actions</td>
            </tr>
            @foreach($users as $u)
            <tr><td>{{$u['id']}}</td>
                <td>{{$u['name']}}</td> 
                <td>{{$u['contact']}}</td> 
                <td>{{$u['address']}}</td>
                <td><a href={{"delete/".$u['id']}}>Delete</a></td>
            </tr>
            @endforeach
    </table>
    <a class="goback" href="admincontrol">&#8678;Back</a>
    </div></div>
<script src="{{url('/js/admincontrol.js')}}"> 
</script>