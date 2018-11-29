<!DOCTYPE html>
<html>
<head>
    <title>Sample data show</title>

</head>
<body>
    <h1>Project</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <p>
        <a href="/projects/create">Create</a>
    </p>
</body>
</html>