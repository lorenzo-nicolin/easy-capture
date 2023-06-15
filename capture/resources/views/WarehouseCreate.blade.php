<div class="row">
    <form method="POST" action="{{ route('Warehouse.store') }}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

        <input type="text" name="name"><br>
        <input type="text" name="address"><br>
        <input type="text" name="status">

        <button>Save</button>

    </form>
</div>