<div class="book-grid-item grid-card"  data-entity-type="book" data-entity-id="{{$book->id}}">
    <a href="{{$book->getUrl()}}" title="{{$book->name}}">
        <div class="featured-image-container">
            <img style="background:#e7e7e7" src="{{$book->getBookCover()}}" alt="{{$book->name}}">
        </div>
    </a>

    <div class="grid-card-content">
        <h2><a class="break-text" href="{{$book->getUrl()}}" title="{{$book->name}}">{{$book->getShortName(35)}}</a></h2>
        @if(isset($book->searchSnippet))
            <p >{!! $book->searchSnippet !!}</p>
        @else
            <p >{{ $book->getExcerpt(120) }}</p>
        @endif
    </div>

    <div class="grid-card-footer">
        <span>@include('partials.discover-meta', ['entity' => $book])</span>
    </div>
</div>
