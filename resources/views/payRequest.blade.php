@include('index', array('title'=>'payRequest'))
@section('content')
<form method="post" action="/pay">
    @csrf
    Currency:<br>
    <input type="text" name="currency">
    <br>
    <br>
    Amount:<br>
    <input type="text" name="amount">
    <br>
    <br>
    Description:<br>
    <input type="text" name="description">
    <br>
    <br>
    <input type="submit" value="Submit">
</form>

