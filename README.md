#XelSelenius

An Individual MVC project for SoftUni PHP Web.

A Symfony project created on March 27, 2017, 1:28 pm.

Project disctiption:
RPG Web based game.

Developers: 

Game Designer: Simeon Petrov (Xel'Selenius)
Lead Developer: Simeon Petrov (Xel'Selenius)
Graphic Designer: Simeon Petrov (Xel'Selenius)
Art: Simeon Petrov (Xel'Selenius)

In order to make a bootstrap include from local files you can use the following code: 

    {#Bootstrap included here#}
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.0.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>

    {#Stylesheets included here#}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    
Must be placed in <head>, located in base.html.twig.

Thou it looks a bit different from the CDN-bootstrap which is included by the following link:

    {#Bootstrap included here#}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

Use what ever fits to your plans.
