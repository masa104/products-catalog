<?php
// Home
Breadcrumbs::for('home', function ($trail) {
  $trail->push('Home', route('home'));
});
// Home > Cat Lev11 (> Cat Lev2 > Item Detail)
Breadcrumbs::for('hierarchy', function ($trail, $cat, $item = null) {
  $trail->parent('home');

  if ($cat->parent) {
    $trail->push($cat->parent->name, route('list', [$cat->parent->slug]));
    $trail->push($cat->name, route('list', [$cat->parent->slug, $cat->slug]));
  } else {
    $trail->push($cat->name, route('list', [$cat->slug]));
  }

  if ($item) {
    $trail->push($item->name);
  }
});

// Home > Search
Breadcrumbs::for('search', function ($trail, $keyword) {
  $trail->parent('home');
  $trail->push('Search : ' . $keyword, route('search'));
});
