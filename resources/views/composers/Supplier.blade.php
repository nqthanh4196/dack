
	

@foreach($data as $item)
<div class="col-xs-12 col-md-12 col-sm-6">
    <!-- Sidebar Widget - Filter Categories -->
    <div class="widget filter-categories">
        <a href='../supplier/{{$item->id}}' class="heading">{{$item->tennsx}}</a>
    </div>
</div>
@endforeach