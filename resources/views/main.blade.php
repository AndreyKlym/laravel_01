<!DOCTYPE html>
<html>
<head>
    <title>my view</title>
</head>
<body>
    my test view
    <div>первый элемент массива: {{$arr[0]}}</div>
    <div>первый элемент массива: {{$arr[1]}}</div>
    <div>сумма элементов {{$arr[0] + $arr[1]}}</div>
    <div>кол-во элементов {{count($arr)}}</div>

</body>
</html>
