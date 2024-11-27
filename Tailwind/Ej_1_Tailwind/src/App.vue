<script setup>

</script>

<template>

  <!DOCTYPE html>

  <html lang="es">

  <head>

    <title>Smart Health Monitoring Wristwatch</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />

  </head>

  <body class="" style="font-family: 'Source Sans Pro', sans-serif">

    <!--Nav-->

    <nav class="">

      <div class="flex justify-between m-2">
        <a class="font-bold text-2xl text-gray-600" href="#"> SHMW </a>
        <div class="">
          <button class="">
            <svg class="" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="space-x-7">
          <ul class="flex space-x-7 text-gray-600 font-semibold">
            <li>
              <a class="" href="/">Home</a>
            </li>
            <li>
              <a class="" href="#">About</a>
            </li>
            <li>
              <a class="" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Hero-->

    <div class="" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">

      <div class="m-3 p-10">

        <h2 class="text-white font-bold text-2xl">Smart Health Monitoring Wristwatch!</h2>

        <h3 class="text-white font-semibold">Monitor your health vitals smartly anywhere you go.</h3>

        <button class="mt-6 bg-white text-gray-600 font-bold px-6 py-3 rounded-full shadow-lg text-sm">PRE
          ORDER</button>

      </div>

    </div>

    <!-- Features -->

    <section class="m-5 py-5">

      <h2 class="text-center font-bold text-2xl text-gray-700">Features</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

        <div class="">

          <h4 class="font-bold text-2xl text-gray-700">Exercise Metrics</h4>

          <p class="text-sm text-gray-600 font-semibold">Our Smart Health Monitoring Wristwatch is able to capture you
            vitals while you exercise. You can create different category of exercises and can track your vitals on the
            go.</p>

        </div>

        <div class="">

          <img src="https://raw.githubusercontent.com/ammezie/tailwind_landing_page/master/assets/health.svg"
            alt="Monitoring" />

        </div>

      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

        <div class="">

          <img src="https://raw.githubusercontent.com/ammezie/tailwind_landing_page/master/assets/report.svg"
            alt="Reporting" />

        </div>

        <div class="m-4">

          <h4 class="font-bold text-xl text-gray-800">Reporting</h4>

          <p class="text-gray-600 text-sm">Our Smart Health Monitoring Wristwatch can generate a comprehensive report on
            your vitals depending on your settings either daily, weekly, monthly, quarterly or yearly.</p>

        </div>

      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

        <div class="">

          <h4 class="font-bold text-xl text-gray-800">Syncing</h4>

          <p class="text-gray-600 text-sm">Our Smart Health Monitoring Wristwatch allows you to sync data across all
            your mobile devices whether iOS, Android or Windows OS and also to your laptop whether MacOS, GNU/LInux or
            Windows OS.</p>

        </div>

        <div class="">

          <img src="https://raw.githubusercontent.com/ammezie/tailwind_landing_page/master/assets/sync.svg"
            alt="Syncing" />

        </div>

      </div>

    </section>

    <!-- Testimonials -->

    <section class="">

      <div class="bg-gray-200">

        <h2 class="m-4 py-2 text-center text-2xl font-extrabold text-gray-900">Testimonials</h2>

        <div class="flex py-5">

          <div class="bg-white m-2 shadow-lg rounded-sm">

            <div class="m-3">

              <p class="">Monitoring and tracking my health vitals anywhere I go and on any platform I use has never
                been easier.</p>

              <p class="text-sm my-3 text-gray-500 font-semibold">John Doe</p>

            </div>

          </div>

          <div class="bg-white m-2 shadow-lg rounded-sm">

            <div class="m-3">

              <p class="">As an Athlete, this is the perfect product for me. I wear my Smart Health Monitoring
                Wristwatch everywhere i go, even in the bathroom since it's waterproof.</p>

              <p class="text-sm my-3 text-gray-500 font-semibold">Jane Doe</p>

            </div>

          </div>

          <div class="">

            <div class="bg-white m-2 shadow-lg rounded-sm">

              <p class="m-3">I don't regret buying this wearble gadget. One of the best gadgets I own!.</p>

              <p class="m-3 text-sm my-3 text-gray-500 font-semibold">James Doe</p>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--Call to Action-->

    <section style="">

      <div class="bg-indigo-500 text-center">

        <h2 class=" text-white font-bold text-2xl p-3">Limited in Stock</h2>

        <h3 class="text-white font-semibold">Get yourself the Smart Health Monitoring Wristwatch!</h3>

        <button class="mb-5 mt-6 bg-white text-gray-600 font-bold px-6 py-3 rounded-full shadow-lg text-sm">PRE
          ORDER</button>

      </div>

    </section>

    <!--Footer-->

    <footer class="bg-white-800 text-white py-12">
      <div class="w-full mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8">
        <div>
          <h5 class="text-gray-800 font-bold mb-4">LINKS</h5>
          <ul>
            <li><a href="#" class="text-gray-600">FAQ</a></li>
            <li><a href="#" class="text-gray-600">Help</a></li>
            <li><a href="#" class="text-gray-600">Support</a></li>
          </ul>
        </div>
        <div>
          <h5 class="text-gray-800 font-bold mb-4">LEGAL</h5>
          <ul>
            <li><a href="#" class="text-gray-600">Terms</a></li>
            <li><a href="#" class="text-gray-600">Privacy</a></li>
          </ul>
        </div>
        <div>
          <h5 class="text-gray-800 font-bold mb-4">SOCIAL</h5>
          <ul>
            <li><a href="#" class="text-gray-600">Facebook</a></li>
            <li><a href="#" class="text-gray-600">LinkedIn</a></li>
            <li><a href="#" class="text-gray-600">Twitter</a></li>
          </ul>
        </div>
        <div>
          <h5 class="text-gray-800 font-bold mb-4">COMPANY</h5>
          <ul>
            <li><a href="#" class="text-gray-600">Blog</a></li>
            <li><a href="#" class="text-gray-600">About Us</a></li>
            <li><a href="#" class="text-gray-600">Contact</a></li>
          </ul>
        </div>
      </div>
    </footer>

  </body>

  </html>

</template>

<style></style>