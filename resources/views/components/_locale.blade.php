<form action="{{}}" method="POST">
    @csrf
    <button type="submit">
        <span class="flag-icon flag-icon-{{$it}}"></span>
    </button>

</form>