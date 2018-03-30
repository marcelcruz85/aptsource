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
            <li>{{ $listing['City'] }}</li>
            <li>{{ $listing['Title'] }}</li>

        @endforeach
        </ul>
        <pre>
        {{ var_dump($listings) }}
        </pre>

    </div>
</body>

</html>