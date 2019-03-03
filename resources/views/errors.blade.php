<style>
.error {
    background-color: #ff0000;
    color: #ffffff;
    list-style
}
</style>


@if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
