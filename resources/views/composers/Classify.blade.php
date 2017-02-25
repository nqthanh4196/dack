
@foreach($cate as $i)
<div class="col-xs-12 col-md-12 col-sm-6">
    <!-- Sidebar Widget - Filter Categories -->
    <div class="widget filter-categories">
        <a data-toggle="collapse" href="#{{$i->id}}" aria-expanded="false" aria-controls="categories-wrapper" class="heading">
            <i class="fa fa-plus"></i>
            <span>{{$i->tendanhmuc}}</span>
        </a>

        <div class="collapse" id="{{$i->id}}">

            <ul>
                @foreach($data as $item)
                	@if($item->id_danhmucsp ==$i->id)
						<li><a href='../classify/{{$item->id}}'>{{$item->tenloai}}</a></li>
					@endif
				@endforeach
            </ul>

        </div>
    </div>
</div>

@endforeach