<!-- <div>
    <span class="label label-primary">{{$data->name}}</span>
    <span class="label label-primary">{{$data->address}}</span>
    <span class="label label-primary">{{$data->status}}</span>
    <a href="/Warehouse/{{$data->id}}"> Show Edit Form </a>
</div> -->

<form action="{{route('Warehouse.update',$data->id)}}" method="post">
@method('PUT')
@csrf 
<!-- <input name="_token" type="hidden" value="{{ csrf_token() }}"/> -->
<input type="text" name="name" value="{{ $data->name }}"><br>
<input type="text" name="address" value="{{ $data->address }}"><br>
<input type="text" name="status" value="{{ $data->status }}"><br>

<button>Save</button>
</form>