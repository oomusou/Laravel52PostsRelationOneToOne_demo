<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<div>
    @foreach($users as $user)
        <div>
            <h2>{{ $user->name }}</h2>
            <h2>{{ $user->email }}</h2>
            @if($user->post != null)
                <h2>{{ $user->post->title }}</h2>
            @endif
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>