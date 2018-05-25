@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>check your typing is Wrong</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
