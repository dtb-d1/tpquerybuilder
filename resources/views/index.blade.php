<!DOCTYPE html>
<html>
<head>
    <title>My Form</title>
</head>
<body>
 

    <h1>Hello world</h1>
    <form method="POST" action="{{ route('processForm') }}">
    @csrf 
        Name <input name="name" type="text"><br>
        Age <input name="age" type="text"><br>
        <input type="submit">
    </form>
    <?php
        $url = route('fuck',['id'=>1,'photos'=>'yes']);
        echo $url;
    ?>
</body>
</html>
