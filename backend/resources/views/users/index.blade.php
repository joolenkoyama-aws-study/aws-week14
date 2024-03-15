<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body>
  <div class="container mx-auto max-w-min my-8">
    <div class="container">
        <form action="/users" method="GET">
            <input type="text" name="name" placeholder="名前..." class="w-full border rounded-lg p-2.5">
        </form>
    </div>
    @if($users->count() > 0)
    <table class="table-auto w-[32rem]">
      <thead>
        <tr>
          <th class="px-4 py-2">Name</th>
          <th class="px-4 py-2">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td class="border px-4 py-2">{{ $user->name }}</td>
          <td class="border px-4 py-2">{{ $user->email }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
     <div class="w-[32rem] p-4">
        <p class="text-center">@if(request()->get('name'))「{{ request()->get('name') }}」に該当する@endif ユーザーが存在しません</p>
     </div>
    @endif
  </div>
</body>


</html>