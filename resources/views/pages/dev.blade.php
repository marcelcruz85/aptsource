<html>

<head>
    <title>Dev page</title>
</head>

<body>
    <h1>Output</h1>
    <div>
        

        {{ $total }}
        
        {{ dd($listings) }}

        @foreach ($listings as $listing)
            {{ $listing->ID }}
        @endforeach
    </div>
</body>

</html>