<li>
  <img src="{{ $user->gravatar('20') }}" alt="{{ $user->name }}" class="gravatar"/>
  <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>
</li>
