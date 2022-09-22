@props(['title', 'titledesc', 'span', 'url_img', 'span1', 'article', 'article2', 'button1', 'button2', 'span2'])

<section class="px-10 bg-gray-300 max-w-6xl">
  <div class="bg-white">
    <div class="text-center space-y-2 py-5 font-medium">
      <h2 class="uppercase  text-lg">{{ $title }}</h2>
      <p>{{ $titledesc }}<span class="text-gray-400">{{ $span }}</span></p>
    </div>
    <div class="flex justify-center px-5 ">
      <img class="w-full" src="img/{{ $url_img }}" alt="">
    </div>
    <div class="px-5 py-5 space-y-3 ">
      <p class=""><span class="font-bold">{{ $span1 }}</span>{{ $article }}</p>
      <p>{{ $article2 }}</p>
    </div>
    <div class="flex justify-between px-20 py-5">
      <button class="border p-3"><i class="fa-solid fa-thumbs-up"></i>{{ $button1 }}</button>
      <button class="border p-3 bg-black text-white">{{ $button2 }}<span
          class="bg-white text-black px-1">{{ $span2 }}</span></button>
    </div>
  </div>
</section>
<div>
  {{ $slot }}
</div>
