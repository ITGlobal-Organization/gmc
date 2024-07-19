<select class="pd-sort sort_by">
        <option value="">{{ trans('lang.sort_by') }}</option>
        <option value="title-asc" {{ ($orderBy=="title" && $order=="asc")? 'selected':''}}>A to Z</option>
        <option value="title-desc" {{ ($orderBy=="title" && $order=="desc")? 'selected':''}}>Z to A</option>
        <option value="created_at-desc" {{ ($orderBy=="created_at" && $order=="asc")? 'selected':''}}>{{ trans('lang.latest_to_oldest') }}</option>
        <option value="created_at-asc" {{ ($orderBy=="created_at" && $order=="desc")? 'selected':''}}>{{ trans('lang.oldest_to_latest') }}</option>
    </select>