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
        
            <li>{{ $listing['ID'] }}</li>

        @endforeach
        </ul>
        <pre>
        {{ var_dump($listing['UnitDescription']) }}
        </pre>

    </div>
</body>

</html>