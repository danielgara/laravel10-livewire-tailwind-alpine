@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')
<main class="space-y-40 mb-12">
  <div class="relative" id="home">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
      <div class="relative pt-10 ml-auto">
        <div class="text-center mx-auto">
        <div x-data="{ count: 0 }">
          <button x-on:click="count++">Increment</button>
          <span x-text="count"></span>
        </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection