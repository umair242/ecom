<head>
<title>aStar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
  @foreach($finalHeaderCssData as $name => $cssKey)
<link rel="stylesheet" type="text/css" href="{{url($cssKey)}}">
<link rel="stylesheet" type="text/css" href="{{url($cssKey)}}">
  @endforeach

    @foreach($finalHeaderJsData as $name => $jsKey)
    <script src="{{url($jsKey)}}"></script>
 @endforeach
</head>
 