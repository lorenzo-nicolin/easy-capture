<div>
@foreach ($data as $data)
    <span class="label label-primary">{{$data->name}}</span>
    <span class="label label-primary">{{$data->address}}</span>
    <span class="label label-primary">{{$data->status}}</span>
    <a href="/Warehouse/{{$data->id}}/edit"> Edit </a>
@endforeach
</div>

<!-- test -->