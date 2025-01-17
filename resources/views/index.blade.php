@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <livewire:popular-games>
        <div class="flex flex-col lg:flex-row my-10">
            <livewire:recently-reviewed>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 tracking-wide font-semibold">Most Anticipated</h2>
                <livewire:most-anticipated>
                <h2 class="text-blue-500 tracking-wide font-semibold mt-8">Coming Soon</h2>
                <livewire:coming-soon>

            </div><!-- most anticipated end -->

        </div>
    </div><!-- end contrainer -->

@endSection
