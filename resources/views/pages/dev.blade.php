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
        <pre>
            @if (is_array($listing) and array_key_exists('Title', $listing) )
                <li>{{ $listing['Title'] }}</li>
            @endif

            @if (is_array($listing) and array_key_exists('Photos', $listing) )
                <img src="{{ $listing['Photos']['Photo'][0]}}" alt=""> 
            @endif
        </pre>

        @endforeach
        </ul>

    </div>
</body>

</html>