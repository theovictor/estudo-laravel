@props([
  'title' => null,
  'class' => '',
])

<button class={{$class}} style="background-color: aqua; color: dimgray">
  <p>{{$title}}</p>
</button>
