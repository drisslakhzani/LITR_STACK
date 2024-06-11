<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
@foreach($jobs as $item)
    <li><a href="/job/{{$item['id']}}">{{$item['jobTitle']}}</a></li>
@endforeach
</body>
</html>
