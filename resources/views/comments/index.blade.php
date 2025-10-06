
<ul>
@foreach ($comments as $comment)
    <li>{{ $comment->content }}</li>
    <button></button>
@endforeach
</ul>

<a href="create.blade.php">create</a>

{{-- create a link back to create form --}}