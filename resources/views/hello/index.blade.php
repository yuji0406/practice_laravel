<html>
    <head>
        <title>Hello/Index</title>
        <style>
            body { font-size: 16pt; color: #999;}
            h1 { font-size: 100pt; text-align: right; color: #f6f6f6;
                margin: -50px 0 -100px 0px; }
        </style>
    </head>
    <body>
        <h1>Blade/Index</h1>
        <p>&#064;whileディレクティブの例</p>
        <ol>
            @php
                $counter = 0;
            @endphp
            @while ($counter < count($data))
                <li>
                    {{ $data[$counter] }}
                </li>
                <p>はぁ！？</p>
                <p>oioi</p>
                <p>kimoi</p>
                @php
                    $counter++;
                @endphp
            @endwhile
        </ol>
    </body>
</html>
