<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>SUBMIT IDEA</h1>
    <form action="{{ url('/ideas/add') }}" method="POST">
        Title:<br>
        <input type="text" name="title" placeholder="Your brilliant idea title">
        <br>
        Description:<br>
        <input type="text" name="decription" placeholder="Pour your explanation here">
        <br><br>
        <input type="submit" value="Submit">
    </form> 
    <h1>LIST IDEAS</h1>
    <h1>Hello World! from Dashboard Module: Page IDEAS</h1>
    {% for idea in ideas %}
    <ul>
        <li>{{ idea.title }}</li>
        <li>{{ idea.description }}</li>
    </ul>
    {% endfor %}
</body>
</html>