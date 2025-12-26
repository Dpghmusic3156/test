@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())

<?php
global $post;
$post = get_post($post);
$slug = $post->post_name;
?>

@includeFirst(['partials.' . $slug, 'partials.content-single'])
@endwhile
@endsection