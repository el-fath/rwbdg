<div class="cbp-item">
    <a href="listing1.html">
        <img src="{{ $item->ImagePathSmall }}" alt="{{ $item->title }}" 
        @if ($loop->first)
           style="height:400px;width:776px;"
        @else
           style="height:388px;width:364px;"
        @endif
        >
        <div class="grid-caption">
        <h3>{{ $item->title }}</h3>
        <span>{{ $item->CountProperty }} Properties</span>
        </div>
    </a>
</div>