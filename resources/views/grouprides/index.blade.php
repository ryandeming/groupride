<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
</head>
<body>
  <ul>
    @forelse($grouprides as $groupride)
      <li><a href="{{ $groupride->path() }}">{{ $groupride->title }}</a></li>
    @empty
      <li>No grouprides</li>
    @endforelse
  </ul>
</body>
</html>