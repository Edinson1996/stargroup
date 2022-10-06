@if ($errors->any())
<div class="alert alert-danger mx-3">
    <ul>
        <li>
            {{ $errors->first() }}
        </li>
    </ul>
</div>
@endif
