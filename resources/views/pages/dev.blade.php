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
        @endforeach
    </div>
</body>

</html>