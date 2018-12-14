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
      <a href="{{ route('testing.create') }}">
        Ke halaman create
      </a>
        <table>
          <tr>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="3">action</th>
          </tr>
          @foreach ($data['collection'] as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->updated_at }}</td>
              <td>
                <a href="{{ route('testing.show', ['id' => $item->id]) }}">
                  detail
                </a>
              </td>
              <td>
                <a href="{{ route('testing.edit', ['id' => $item->id]) }}">
                  edit
                </a>
              </td>
              <td>
                <form action="{{ route('testing.destroy', ['id' => $item->id]) }}" method="post">
                  <input name="_method" type="hidden" value="DELETE">
                  {{ csrf_field() }}
                  <button type="submit">
                    hapus
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </table>
        {{ $data['collection']->links() }}
    </body>
</html>
