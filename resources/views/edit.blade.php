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
      <form action="{{ route('testing.update', ['id' => $data->id]) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="testing" value="{{ $data->email }}">
        <input type="hidden" name="_method" value="PUT">
        Name
        <input type="text" name="name" placeholder="name" value="{{ $data->name }}">
        <br>
        Email
        <input type="text" name="email" placeholder="email" value="{{ $data->email }}">
        <button type="submit">submit</submit>
      </form>
    </body>
</html>
