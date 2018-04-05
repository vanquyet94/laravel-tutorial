<?php 
# use Illuminate\Pagination\LengthAwarePaginator;
$collection = collect($response);
$paginate = new LengthAwarePaginator(array_values($collection->forPage($page, 10)->all()), $collection->count(), 10, $page, [
    'path'  => $request->url(),
    'query' => $request->query(),
]);
