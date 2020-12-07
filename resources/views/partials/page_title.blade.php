@if(count($breadcrumbs))
	{{ trim($breadcrumbs->pluck('title')->skip(1)->reverse()->implode(' | ')) }} |
@endif
