@props(['title', 'h2', 'span', 'img', 'text1', 'text2', 'button'])

<div class="text-center py-20">
  <div class="pb-10">
    <h1 class="uppercase font-bold text-7xl">
      {{ $title }}
    </h1>
  </div>
  <div class="text-lg font-medium">
    <p>
      {{ $h2 }}<span class="bg-black text-white p-1 ">{{ $span }}</span>
    </p>
  </div>
</div>
<div class="relative">
  <img src="{{ $img }}" alt="">
  <div class="absolute top-[50%] left-[5%] space-y-3">
    <h2 class="text-white text-4xl">{{ $text1 }}</h2>
    <p class="text-white uppercase font-medium text-5xl">{{ $text2 }}</p>
    <button class="uppercase font-bold p-3 text-black bg-gray-200 opacity-50">{{ $button }}</button>
  </div>

</div>
