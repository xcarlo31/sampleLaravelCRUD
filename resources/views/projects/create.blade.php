<!DOCTYPE html>
<html>
<head>
    <title>Sample data show</title>

</head>
<body>
    Create a new project
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project Title">
        </div>

        <div>
            <textarea name="desc0" placeholder="Project Description"></textarea>
        </div>

        <div>
           <button type="submit">Create Project</button>
        </div>
    </form>
</body>
</html>