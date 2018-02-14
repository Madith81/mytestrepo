<div>
    <h1 id="bkmrk-page-title" class="green-inline-bg">{{$page->name}}</h1>
    <div class="addthis_inline_share_toolbox add-this"></div>
    <div style="clear:left"></div>

    @if (isset($diff) && $diff)
        {!! $diff !!}
    @else
        {!! isset($page->renderedHTML) ? $page->renderedHTML : $page->html !!}
    @endif

</div>
