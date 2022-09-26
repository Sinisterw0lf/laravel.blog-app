<div>
  <x-layout title="Mito Blog" />
  <x-hero title="Jane bloglife" h2='Welcome to the blog of ' span="Jane's world" img="img/jane.jpeg" text1="Jane's"
    text2="Fashion Blog" button="subscribe" />
  <div class="flex py-5 bg-gray-300">
    <div class="space-y-5">
      <div>
        <x-card.cardArticle title='title heading' titledesc='Title description,' span='May 2, 2016' url_img='girl_hat.jpeg'
          span1='More Hats!'
          article="I am crazy about hats these days? Some text about this entry blog. Fashion fashion and mauris neque quam, fermentum ut nisl vitaen convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus ar. Phasellus sed ultrices mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla."
          article2="Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco."
          button1=' Like' button2='Replies ' span2='1'>
          <div class=" px-10">
            <div class="flex items-center border-t border-gray-200 bg-white">
              <div class="max-w-[150px] p-5">
                <img class="" src="img/avatar_smoke.jpeg" alt="">
              </div>
              <div class="">
                <p class="text-gray-300"><span class="text-black">George </span>May 3, 2015, 6:32 PM</p>
                <p>Great blog post! Following</p>
              </div>
            </div>
          </div>
        </x-card.cardArticle>
      </div>
      <x-card.cardArticle title='title heading' titledesc='Title description,' span='April 23, 2016'
        url_img='man_hat.jpeg' span1='Hats! ' article="The trend this summer is hats for men!"
        article2="Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla."
        button1=' Like' button2='Replies ' span2='1' />
      <x-card.cardArticle title='title heading' titledesc='Title description,' span='April 7, 2016'
        url_img='runway.jpeg' span1='Dont miss! '
        article="The runway in New York City this weekend is gonna be legendary!"
        article2="Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla."
        button1=' Like' button2='Replies ' span2='3' />
    </div>
    <div class="">
      <x-card.cardProfile url_img="avatar_girl2.jpeg" title="My name"
        description="Just me, myself and I, exploring the universe of unknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you." />
      <x-block.blockPopular />
      <x-block.blockAd />
      <x-block.blockTags />
      <x-block.blockInspiration />
      <x-block.blockFollow />
    </div>


  </div>
