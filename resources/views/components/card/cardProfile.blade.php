@props(['url_img', 'title', 'description'])

<section class="max-w-lg px-5">
  <div class="">
    <img class="w-full" src="img/{{ $url_img }}" alt="">
    <div class="bg-black text-white p-5">
      <h2 class="font-medium">{{ $title }}</h2>
      <h3 class="text-sm">{{ $description }}</h3>
    </div>
  </div>
</section>
