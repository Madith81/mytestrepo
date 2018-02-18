<p class="text-muted small" style="font-size:16px">

    @if ($entity->createdBy)
        {!! trans('entities.meta_created_discover', [
            'user' => "<a href='{$entity->createdBy->getProfileUrl()}'>" . "<img class='discover-image' src='{$entity->createdBy->getAvatar(50)}'>" . htmlentities($entity->createdBy->name) . "</a>"
        ]) !!}
    @endif

</p>
