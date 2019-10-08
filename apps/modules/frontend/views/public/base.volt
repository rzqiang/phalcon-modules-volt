<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{% block title %}Phalcon开发演示站{% endblock %}</title>
        {% block head %}
            <link href="/static/css/home/style.css?{{ version }}" rel="stylesheet" type="text/css" media="screen" />
        {% endblock %}
    </head>
    <body>
        {% include "public/nav.volt" %}
        {% block content %}{% endblock %}
    </body>
    {% block footer %}{% endblock %}
    {% block scrypt %}
        <script type="text/javascript" src="/static/js/jquery.min.2.2.0.js"></script>
    {% endblock %}

</html>