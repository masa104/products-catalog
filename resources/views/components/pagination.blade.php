<p>
	Displaying <span class="font-weight-bold text-primary">{{ $items->firstItem() }} - {{ $items->lastItem() }}</span> of <span class="font-weight-bold text-primary">{{ $items->total() }}</span> items.
</p>
<div class="my-4">
	{{ $items->links() }}
</div>
