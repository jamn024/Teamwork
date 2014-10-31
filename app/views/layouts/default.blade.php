<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teamwork</title>
  {{ HTML::script('bower_components/jquery/dist/jquery.js') }}
  {{ HTML::script('bower_components/foundation/js/foundation.min.js') }}
  {{ HTML::style('bower_components/foundation/css/foundation.css') }}
  {{ HTML::script('bootstrap-datepicker/bootstrap-datepicker.js') }}
  {{ HTML::style('bootstrap-datepicker/datepicker3.css') }}
</head>

<body>
	<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1>
          {{ HTML::linkAction('tasks.index','Teamwork') }}
        </h1>
      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">

      <!-- Left Nav Section -->
      <ul class="left">
        <li>
          {{ HTML::linkAction('tasks.index','Tasks') }}
        </li>
        <li>
          {{ HTML::linkAction('members.index','Members') }}
        </li>
      </ul>
    </section>
  </nav>

  <div class="row">
    <div class="columns large-12">
      @yield('content')
    </div>
  </div>


  <script>
    $(document).foundation();
  </script>

</body>

</html>