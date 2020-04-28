@extends('layouts.layout')


@section('content')
<div class="flex-center position-ref full-height">
  <div class="content">
      <div class="title m-b-md">
          Pizza List
      </div>

      <p>{{ $name }} -- {{ $age }}</p>

      @foreach ($pizzas as $pizza) 
        <p>{{ $loop->index + 1 }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
        @if ($loop->first)
          <span> - First in the loop</span>
        @endif
        @if ($loop->last)
          <span> - Last in the loop</span>
        @endif
        </p>
      @endforeach
  </div>
</div>
@endsection