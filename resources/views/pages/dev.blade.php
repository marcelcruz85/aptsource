<html>

<head>
    <title>Dev page</title>
</head>

<body>
    <h1>Output</h1>
    <div>
        

        {{ $total }}
        <ul>
        @foreach ($listings as $listing)
            <li>{{ $listing->ID }}</li>
            <li>{{ $listing->City }}</li>
        @endforeach
        </ul>
        {{ var_dump($listings) }}

    </div>
</body>

</html>