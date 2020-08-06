<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
</head>
<body>
  <ul>
    @foreach($grouprides as $groupride)
      <li>{{ $groupride->title }}</li>
    @endforeach
  </ul>
</body>
</html>