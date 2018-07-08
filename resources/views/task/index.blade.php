<html>
<body>
    <h1>Tasks</h1>
    <lu>
        @foreach ($aTask as $task)
        <li>
            <a href="./task/{{$task->id}}">{{$task->body}}</a>
        </li>
        @endforeach
    </lu>
</body>
</html>