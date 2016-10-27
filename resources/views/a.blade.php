
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>test a </title>
    </head>

    <body>
        <p>this is test a page </p>
        <form id="form" method="post" action="{{url('/c')}}">
            {{ csrf_field() }}
            <label for="a">读取json文件显示数据</label>
            <input type="text" id="a" hidden="hidden">
            <label for="b">b</label>
            <input type="text" id="b"  hidden="hidden">
            <button id="c">enter</button>
        </form>
        <p>{{$bvar[0]}}</p>
        <p>{{$bvar[1]}}</p>
        <p>{{$bvar[2]}}</p>



    </body>
</html>