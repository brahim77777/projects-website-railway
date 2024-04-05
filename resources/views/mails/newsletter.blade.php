<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <h1 style="font-weight: bold;background-color:rgba(128, 128, 128, 0.845);color:black;padding: 4px 12px;">
            {{ __('Newsletter') }}
        </h1>
    </header>
    <div>
        {!! $mailBody !!}
    </div>

</body>

</html>
