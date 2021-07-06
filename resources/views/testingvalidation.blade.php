<h1>Hello</h1>
<div>
<form method="post" action="testingvalidation">
  @csrf
<input type="text" name="name" placeholder="Enter name here">

<br>

                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
<input type="submit" value="Enter">
</form>    
    