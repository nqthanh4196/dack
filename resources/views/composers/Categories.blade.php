@foreach($cate as $item)
	<li><a href='../categories/{{$item->id}}'>{{$item->tendanhmuc}}</a></li>
@endforeach
