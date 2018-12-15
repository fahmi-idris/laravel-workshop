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
      <form>
        Name
        <input type="text" name="name" placeholder="name" value="{{ $data['collection']->name }}">
        <br>
        Email
        <input type="text" name="email" placeholder="email" value="{{ $data['collection']->email }}">
        <br>
        Phone
        <input type="text" name="email" placeholder="email" value="{{ ($data['phone']) ? $data['phone']->phone : '-' }}">
      </form>
      @if(count($data['products']))
        <table>
          <tr>
            <th>Nama Produk</th>
            <th>Kuantiti</th>
          </tr>
          @foreach($data['products'] as $item)
          <tr>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->quantity }}</td>
          </tr>
          @endforeach
        </table>
      @endif
    </body>
</html>
