@if ($paginator->lastPage() > 1)
<div class="row margin_bottom">
    <div class="col-md-12">
        <ul class="pager">
            <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"><a href="#.">Previous</a></li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
            </li>
        </ul>
    </div>
</div>
@endif