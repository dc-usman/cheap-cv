@extends('layouts.web')

@section('title', $blog->title ?? "-")
@section('description', $blog->meta_description  ?? "-")
@section('canonical', $blog->canonical  ?? "-")


@section('styles')
<style>
    /* Core CSS */
    .service-section h1 {
        --tw-text-opacity: 1;
        color: rgb(88 28 135 / var(--tw-text-opacity));
        font-weight: bold;
        font-size: 2.25rem;
        line-height: 2.5rem;
        margin: 1rem 0;
    }
    .service-section h2,h3 {
        text-align: center;
        --tw-text-opacity: 1;
        color: rgb(119 24 24 / var(--tw-text-opacity));
        font-size: 1.5rem;
        line-height: 2.5rem;
        margin-top: 1rem;
        margin-bottom: 1rem;

    }
    .service-section p{
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .service-section a{
        --tw-text-opacity: 1;
        color: rgb(119 24 24 / var(--tw-text-opacity));
        font-weight: 700;
    }
    .service-section a:hover{
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity));
    }
    .service-section ul{
        --tw-text-opacity: 1;
        color: rgb(119 24 24 / var(--tw-text-opacity));
        list-style-type: disc;
    }
    /* Mobile Size CSS */
    .service-section h1 {
        text-align: center;
    }
    .service-section ul{
        margin-left: 1rem;
    }
    /* md and greater screen size */
    @media (min-width: 768px) {
        .service-section h1 {
            text-align: left;
        }
        .service-section ul{
            margin-left: 2.5rem;
        }
    }
    /* sm and greater screen size  screen size */
    /* @media (min-width: 640px) {

    } */

</style>
@endsection

@section('content')
 <div class="container mx-auto md:col-span-7 lg:col-span-8 flex-1 flex overflow-hidden">
    @if (!empty($blog))
    <div class="flex-1 overflow-y-scroll px-4">
        
        {!! $blog->html !!}

    </div>
    @endif
</div>
@endsection