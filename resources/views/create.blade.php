<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
      @if($errors->any())
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      @endif
      <form action="{{ route('testing.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Name
        <input type="text" name="name" placeholder="name" required>
        <br>
        Email
        <input type="text" name="email" placeholder="email" required>
        <button type="submit">submit</submit>
      </form>
    </body>
</html>
