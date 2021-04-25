<?php include('partials/header-with-navigation.php'); ?>

<section class="pt-40 pb-5 px-4 ">
  <div class="container mx-auto">
    <h1 class="text-5xl mb-5">Style Guide</h1>
    <p class="text-2xl md:w-8/12">
      This is a style guide template for new projects. The template includes colors, typography, icons, buttons, forms, grid and images.
    </p>
  </div>
</section>

<hr class="mb-4">

<!-- Colors -->
<section class="pb-5 px-4 ">
  <div class="container mx-auto">
    <div class="colors">
      <h2 class="text-3xl mb-3"><span>01</span> Color palette:</h2>

      <div class="flex flex-wrap -mx-2 md:-mx-4">
        <div class="px-2 pb-4 w-1/2 md:px-4 md:pb-8 md:w-1/4">
          <div class="rounded bg-black text-white h-40 p-4 flex flex-col justify-end">
            <strong class="text-2xl">Base</strong>
            <p>Black<br>#2c2c2c</p>
          </div>
        </div>

        <div class="px-2 pb-4 w-1/2 md:px-4 md:pb-8 md:w-1/4">
          <div class="rounded bg-blue-600 text-white h-40 p-4 flex flex-col justify-end">
            <strong class="text-2xl">Primary</strong>
            <p>Blue<br>#2c2c2c</p>
          </div>
        </div>
        <div class="px-2 pb-4 w-1/2 md:px-4 md:pb-8 md:w-1/4">
          <div class="rounded bg-green-600 text-white h-40 p-4 flex flex-col justify-end">
            <strong class="text-2xl">Secondary</strong>
            <p>Green<br>#2c2c2c</p>
          </div>
        </div>
        <div class="px-2 pb-4 w-1/2 md:px-4 md:pb-8 md:w-1/4">
          <div class="rounded bg-yellow-500 text-black h-40 p-4 flex flex-col justify-end">
            <strong class="text-2xl">Accent</strong>
            <p>Orange<br>#2c2c2c</p>
          </div>
        </div>



      </div>

    </div>
  </div>
</section>

<hr class="mb-4">

<!-- Typography -->
<section class="pb-5 px-4">
  <div class="container mx-auto">
    <h2 class="text-3xl mb-3"><span>02</span> Typography</h2>

    <p class="text-xl md:w-8/12 mb-4">
      The projects typography is separated in two parts: <br>
      The <span class="underline">design typography</span> and user <span class="underline">generated typoghraphy</span> .
      <br><br>

      First one is the typography styling on each design element. <br>
      And the second is a preview of headings, paragraphs, lists and blockqutes etc and the default spacing between them.

      You may add any special cases of typography as needed.
    </p>

    <hr class="mb-4">

    <h3 class="text-2xl">User generated example:</h3>
    <article class="prose max-w-full pt-10">
      <h1>H1: The wizard quickly jinxed<br> the gnomes before they vaporized</h1>
      <h2>H2: The wizard quickly jinxed the gnomes<br> before they vaporized</h2>
      <h3>H3: The wizard quickly jinxed the gnomes<br> before they vaporized</h3>
      <h4>H4: The wizard quickly jinxed the gnomes before they vaporized</h4>
      <h5>H5: The wizard quickly jinxed the gnomes before they vaporized</h5>
      <h6>H6: The wizard quickly jinxed the gnomes before they vaporized</h6>
      <p><strong>Paragraph:</strong> This is regular paragraph. Used for longer-form text blocks. Ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>And another paragraph, nibh pellentesque vestibulum mattis, lacus tortor posuere nulla, vel sagittis risus mauris ac tortor. Vestibulum et lacus a tellus sodales iaculis id vel dui. Etiam euismod lacus ornare risus egestas dignissim. Fusce mattis justo vitae congue varius. Suspendisse auctor dapibus ornare. .</p>

      <pre class="whitespace-normal">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex nesciunt incidunt aliquam ullam est labore animi architecto iure consequuntur expedita aliquid, eligendi quae quisquam quas quibusdam doloremque fugit, dolor provident?
      </pre>

      <div class="flex flex-wrap -mx-2 md:-mx-4">
        <div class="px-2 pb-4 w-full md:px-4 md:pb-8 md:w-1/2 lg:w-1/3">
          <ul>
            <li>Bulleted list item.</li>
            <li>Another item.</li>
            <li>List item with two lines. nibh pellentesque vestibulum mattis. Aliquam tincidunt mauris. </li>
            <li>Cras ornare tristique elit.</li>
          </ul>
        </div>

        <div class="px-2 pb-4 w-full md:px-4 md:pb-8 md:w-1/2 lg:w-1/3">
          <ol>
            <li>Numbered list item.</li>
            <li>Another item.</li>
            <li>List item with two lines. nibh pellentesque vestibulum mattis. Aliquam tincidunt mauris. </li>
            <li>Cras ornare tristique elit.</li>
          </ol>
        </div>
      </div>
      <blockquote>
        This is a Blockquote. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </blockquote>
    </article>

  </div>
</section>

<hr class="mb-4">

<!-- Icons -->
<section class="pb-5 px-4 ">
  <div class="container mx-auto">

    <div class="styleguide__typography">
      <h2 class="text-3xl mb-3"><span>03</span> Icons</h2>
      <div class="row">
        <div class="col-12 col-sm-8">
          <p>
            For icons, we use <a href="https://icomoon.io/app/" target="_blank">Icomoon</a> which converts icons in a font format.
            Please add a separate layer containing all icons used in the project.
          </p>
        </div>
      </div>

      <div class="icons-wrapper">
        <i class="icon-clock"></i>
        <i class="icon-phone"></i>
        <i class="icon-volume-high"></i>
        <i class="icon-volume-mute2"></i>
        <br>
        <i class="icon-pause"></i>
        <i class="icon-play2"></i>
        <i class="icon-cancel-circle"></i>
        <i class="icon-menu"></i>
        <br>
        <i class="icon-arrow-left2"></i>
        <i class="icon-arrow-up2"></i>
        <i class="icon-arrow-right2"></i>
        <i class="icon-arrow-down2"></i>

      </div>
    </div>
  </div>
</section>

<hr class="mb-4">

<!-- Buttons & links -->
<section class="pb-5 px-4 ">
  <div class="container mx-auto">
    <div class="row">

      <div class="col-sm-6">
        <div class="styleguide__buttons">
          <h2 class="text-3xl mb-3"><span>04</span> Buttons:</h2>
          <p>List of buttons, in default, hover and active.
            Add all variants used in the project.
          </p>
          <hr>
          <div class="row row--justify-center">
            <div class="col-6 col-md-6 col-lg-4"><a href class="button button--primary">Default</a></div>
            <div class="col-6 col-md-6 col-lg-4 d-none d-lg-block"><a href class="button button--primary hover">Hover</a></div>
            <div class="col-6 col-md-6 col-lg-4"><a href class="button button--primary active">Active</a></div>


            <div class="col-6 col-md-6 col-lg-4"><a href class="button button--accent">Default</a></div>
            <div class="col-6 col-md-6 col-lg-4 d-none d-lg-block"><a href class="button button--accent hover">Hover</a></div>
            <div class="col-6 col-md-6 col-lg-4"><a href class="button button--accent active">Active</a></div>

            <div class="col-6 col-md-6 col-lg-4"><a href class="button">Icon <i class="icon-arrow-right2"></i></a></div>
            <div class="col-6 col-md-6 col-lg-4 d-none d-lg-block"><a href class="button button--accent">Icon <i class="icon-arrow-up2"></i></a></div>
            <div class="col-6 col-md-6 col-lg-4"><a href class="button">Icon <i class="icon-arrow-down2"></i></a></div>

          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <h2 class="text-3xl mb-3"><span>05</span> Links:</h2>
        </p>
        <hr>
        <p>
          This is <a href="#">default link</a> style<br>
          This is <a href="#" class="link--secondary">an alternative link</a> style<br>
          This is <a href="#" class="link--accent">yet another alternative link </a>style<br>
        </p>

        <p class="dark">
          This is <a href="#">default link</a> on a dark background<br>
          This is <a href="#" class="link--secondary">an alternative link</a> style<br>
        </p>
      </div>
    </div>
  </div>

</section>

<hr class="mb-4">

<!-- Grid -->
<section class="pb-5 px-4 ">
  <div class="container mx-auto">

    <div class="grid">
      <h2 class="text-3xl mb-3"><span>06</span> Container: </h2>
      <div class="row">
        <div class="col-12 col-sm-8">
          <p>
            Resize the widow to see the container width change
          </p>
        </div>
      </div>

      <div class="resize-x overflow-auto">

      <div class="text-center">
        <span class="block sm:hidden">Up to 640px container width is 100%</span>
        <span class="hidden sm:block md:hidden">Up to 768px container width is 640px</span>
        <span class="hidden md:block lg:hidden">Up to 1024px container width is 768px</span>
        <span class="hidden lg:block xl:hidden">Up to 1280px container width is 1024px</span>
        <span class="hidden xl:block">1536px and above container width is 1280px</span>
      </div>
      <hr>
        <div class="h-screen relative">
          <iframe class="h-screen overflow-auto resize-x w-full border-black border-2" src="styleguide-grid.php" frameborder="0"></iframe>
        </div>
      </div>


      <!-- <div class=" hidden md:flex flex-wrap -mx-2 md:-mx-4">
        <div class="px-2 pb-4 w-1/12 md:px-4 md:pb-8 md:w-1/4"> -->

      <div class="row">
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="grid-block">col-4</div>
        </div>
        <div class="col-4">
          <div class="grid-block">col-4</div>
        </div>
        <div class="col-4">
          <div class="grid-block">col-4</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Grid fluid -->
<section class="pb-5 px-4 ">
  <div class="container mx-auto">
    <!-- Grid layout -->
    <div class="grid">
      <h2 class="text-3xl mb-3"><span>07.1</span> Container fluid:</h2>
    </div>
  </div>

  <div class="container-fluid s-styleguide">
    <div class="grid">
      <div class="text-center">
        <span>A fluid grid is always 100%</span>
      </div>
      <hr>

      <div class="row d-none d-md-flex">
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
        <div class="col-1">
          <div class="grid-block">col-1</div>
        </div>
      </div>

      <div class="row">
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
        <div class="col-3">
          <div class="grid-block">col-3</div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="grid-block">col-4</div>
        </div>
        <div class="col-4">
          <div class="grid-block">col-4</div>
        </div>
        <div class="col-4">
          <div class="grid-block">col-4</div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- Images -->
<section class="pb-5 px-4 ">
  <div class="container mx-auto">
    <h2 class="text-3xl mb-3"><span>08</span> Images</h2>
    <div class="row">
      <div class="col-12 col-md-8">
        <p>Images are always 100% width of the container. Image captions/descriptions should always be 16px and placed directly under the image with a 10px margin from the image.</p>
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-8">
        <figure>
          <img src="https://i.picsum.photos/id/866/510/309.jpg" alt="">
          <figcaption>Fig.1 - Lorem ipsum, dolor sit amet.</figcaption>
        </figure>
      </div>
      <div class="col-4">
        <figure>
          <img src="https://i.picsum.photos/id/1080/289/369.jpg" alt="">
          <figcaption>Fig.2 - Long figure caption which takes two lines or more.</figcaption>
        </figure>
      </div>
      <div class="col-4">
        <figure>
          <img src="https://i.picsum.photos/id/216/289/369.jpg" alt="">
          <figcaption>Fig.3 - Lorem ipsum, dolor sit amet.</figcaption>
        </figure>
      </div>
      <div class="col-8">
        <figure>
          <img src="https://i.picsum.photos/id/217/510/309.jpg" alt="">
          <figcaption>Fig.4 - Lorem ipsum, dolor sit amet.</figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>


<?php include('partials/footer.php'); ?>