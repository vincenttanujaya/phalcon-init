<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Hello World! from Dashboard Module: Page IDEAS</h1>
    {% for idea in ideas %}
    <ul>
        <li>{{ idea.title }}</li>
        <li>{{ idea.description }}</li>
    </ul>
    {% endfor %}
</body>
</html>