<?php include('partials/header.php'); ?>

<!-- Grid -->
<section class="pb-5 px-4 ">
  <div class="container mx-auto">
    <div class="hidden md:flex md:flex-wrap md:-mx-4">
      <?php for ($i = 0; $i < 12; $i++) : ?>
        <div class="px-4 pb-4 w-1/12">
          <div class="bg-gray-100 h-40 flex justify-center items-center">col-1</div>
        </div>
      <?php endfor; ?>
    </div>


    <div class="md:flex flex-wrap -mx-2 md:-mx-4">
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <div class="px-2 pb-4 w-full md:px-4 md:pb-8 md:w-1/3">
          <div class="bg-gray-200 h-40 flex justify-center items-center">col-3</div>
        </div>
      <?php endfor; ?>
    </div>


    <div class="md:flex md:flex-wrap md:-mx-4">
      <?php for ($i = 0; $i < 4; $i++) : ?>
        <div class="px-2 pb-4 w-full md:px-4 md:pb-8 md:w-1/4">
          <div class="bg-gray-300 h-40 flex justify-center items-center">col-4</div>
        </div>
      <?php endfor; ?>
    </div>

  </div>
</section>

<!-- Grid fluid -->
<!-- <section class="pb-5 px-4 ">
  <div class="container mx-auto">
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
</section> -->

<?php include('partials/footer.php'); ?>