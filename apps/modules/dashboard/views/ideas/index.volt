<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>{{ flashSession.output() }}</h1>
    <h1>SUBMIT IDEA</h1>
    <form action="{{ url(['for': 'ideas-add']) }}" method="POST">
        Title:<br>
        <input type="text" name="title" placeholder="Your brilliant idea title">
        <br>
        Description:<br>
        <input type="text" name="description" placeholder="Pour your explanation here">
        <br><br>
        <input type="submit" value="Submit">
    </form> 
    <h1>LIST IDEAS</h1>
    {% for idea in ideas %}
    <ul>
        <li>{{ idea.title }}</li>
        <li>{{ idea.description }}</li>
    </ul>
        <form action="{{ url(['for':'ideas-rate']) }}" method="POST">
            <input type="hidden" name="id" value="{{ idea.id }}">
            <label for="rate">
                5
                <input type="radio" name="rate">
            </label>
            <label for="rate">
                4
                <input type="radio" name="rate">
            </label>
            <label for="rate">
                3
                <input type="radio" name="rate">
            </label>
            <label for="rate">
                2
                <input type="radio" name="rate">
            </label>
            <label for="rate">
                1
                <input type="radio" name="rate">
            </label>
            <button>Rate!</button>
        </form>
        <hr>
    {% endfor %}
</body>
</html>