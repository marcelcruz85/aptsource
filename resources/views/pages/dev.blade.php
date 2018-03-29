<html>

<head>
    <title>Dev page</title>
</head>

<body>
    <h1>Output</h1>
    <div>

        {{ $output['Total'] }}
        {{ $output['Listings']['Listing'][0]['ID'] }}

        @foreach($output['Listings'] as $listing => $value) 
            @foreach($value as $k => $v) 
                <ul>
                @foreach($v as $k => $v) 
                    <li>{{ $k }}</li>
                @endforeach 
                </ul>
            @endforeach 
        @endforeach
    </div>
</body>

</html>