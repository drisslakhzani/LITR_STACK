<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
@foreach($employers as $item)
    <li><a href="/employer/{{$item['id']}}">{{$item['name']}}</a></li>
@endforeach
</body>
</html>
