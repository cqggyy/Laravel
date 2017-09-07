
<h1><a href="{{ route('users.show', $user->id) }}">
  <img src="{{ $user->gravatar('50') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>{{ $user->name }}</h1>