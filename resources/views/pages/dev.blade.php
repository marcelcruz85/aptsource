<html>

<head>
    <title>Dev page</title>
</head>

<body>
    <h1>Output</h1>
    <div>

        {{ $output['Total'] }}
        {{ $output['Listings']['Listing'][0]['ID'] }}
        

        @foreach($listings as $listing => $value) 
            {{ $listing }}
            @foreach($listings as $key => $value) 
                {{ $value }}
            @endforeach
        @endforeach

        {{ dd($listings) }}
    </div>
</body>

</html>