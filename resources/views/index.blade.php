<!doctype html>

<html>

<head>

    <title>@yield('title', 'Laracasts')</title>

</head>

<body>
{{--Header maken voor standaard--}}
The real index

@yield ('content')

{{--Footer maken voor elke pagina--}}
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/contact">Contact</a> us to learn more.</li>
    <li><a href="/payments/payRequest">Pay Request</a></li>
    <li><a href="/payments/create">Create</a></li>
</ul>

</body>

</html>
