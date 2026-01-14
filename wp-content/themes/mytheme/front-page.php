<?php get_header(); ?>


<div class="hero-section">
    <img src="<?php echo get_template_directory_uri(); ?>/image/herosection-hospital.jpg" alt="Jubha Hospital" />
    <div class="background"></div>
    <div class="hero-position">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor-hero.png" alt="Doctor Here">
    </div>
    <div class="text-hero">
         <h1>Welcome to Jubha Hospital</h1>
        <br>
        <p>Providing compassionate, high-quality healthcare for everyone.</p>
        <br>
        <p>it is a llong established fact that a reader <br>
         will sistracted by the readable contect of a  <br>
         page when looking.</p>
    </div>
    <div class="btn-group">
        <a href="#appointment" class="btn-appointment">BOOK NOW</a>
    </div>
    <div class="text-button">
        <h3>100K+ <br> Happy Patients</h3>
    </div>
    <div class="text-buttonn">
        <h3>858+ <br> Spaciallist doctor</h3>
    </div>
    <div class="text-buttonnn">
        <h3>95% <br> Our success</h3>
    </div>
</div>
<br>
<br>







<script src="https://cdn.tailwindcss.com"></script>

<section class="bg-[#0a2e2e] text-white p-8 md:p-16 font-sans">
  <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    
    <div class="grid grid-cols-2 gap-4">
      
      <div class="bg-white/10 p-8 rounded-sm border border-white/5 flex flex-col items-start space-y-2">
        <div class="mb-2">
           <svg class="w-10 h-10 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="<?php echo get_template_directory_uri(); ?>/image/workforce_1.svg" alt=""></svg>
        </div>
        <span class="text-4xl font-bold">6500</span>
        <span class="text-xs uppercase tracking-widest text-white/70 leading-tight">Qualified<br>Workforce</span>
      </div>

      <div class="bg-white/10 p-8 rounded-sm border border-white/5 flex flex-col items-start space-y-2">
        <div class="mb-2">
           <svg class="w-10 h-10 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="<?php echo get_template_directory_uri(); ?>/image/doctors_2.svg" alt=""></svg>
        </div>
        <span class="text-4xl font-bold">800</span>
        <span class="text-xs uppercase tracking-widest text-white/70 leading-tight">Specialized<br>Doctors</span>
      </div>

      <div class="bg-white/10 p-8 rounded-sm border border-white/5 flex flex-col items-start space-y-2">
        <div class="mb-2">
           <svg class="w-10 h-10 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="<?php echo get_template_directory_uri(); ?>/image/departments.svg" alt=""></svg>
        </div>
        <span class="text-4xl font-bold">168</span>
        <span class="text-xs uppercase tracking-widest text-white/70 leading-tight">Medical<br>Facilities</span>
      </div>

      <div class="bg-white/10 p-8 rounded-sm border border-white/5 flex flex-col items-start space-y-2">
        <div class="mb-2">
           <svg class="w-10 h-10 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="<?php echo get_template_directory_uri(); ?>/image/bed.svg" alt=""></svg>
        </div>
        <span class="text-4xl font-bold">1300</span>
        <span class="text-xs uppercase tracking-widest text-white/70 leading-tight">Total<br>Beds</span>
      </div>

    </div>


    <div class="space-y-6">
      <header>
        <p class="text-cyan-400 uppercase tracking-widest text-sm font-semibold mb-2">Statistics</p>
        <h2 class="text-4xl font-bold mb-4">AGH At a Glance</h2>
        <h3 class="text-2xl font-medium text-white/90">We provide specialized units in various medical specialties</h3>
      </header>
      
      <p class="text-white/70 leading-relaxed text-lg">
        A continuation of a series of successes in the Group, we provide specialized units in various medical specialties, where will meet the caregivers and the modern medical equipment to serve the community and people.
      </p>

      <div class="pt-4">
        <a href="#" class="inline-flex items-center px-8 py-3 border border-white/30 rounded-full hover:bg-white hover:text-teal-900 transition-all group">
          <span class="uppercase tracking-widest text-xs font-bold mr-2" id="branches">Our Branches</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
      </div>
    </div>

  </div>
</section>







  <section class="max-w-7xl mx-auto py-16 px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800">Our Locations</h2>
      <div class="h-1 w-20 bg-teal-600 mx-auto mt-4"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow">
        <div class="p-6">
          <h3 class="text-xl font-bold text-teal-900 mb-2">AGH Khobar</h3>
          <p class="text-sm text-gray-600 mb-4 italic">The flagship tertiary care hospital providing comprehensive services.</p>
          <div class="space-y-2 text-sm text-gray-700">
            <p><strong>📍 Location:</strong> Al Khobar, KSA</p>
            <p><strong>📞 Phone:</strong> +966 13 867 9400</p>
            <p><strong>🕒 Hours:</strong> 24/7 (Emergency)</p>
          </div>
          <div class="mt-6 flex gap-2">
            <button class="flex-1 bg-teal-700 text-white py-2 text-xs font-bold rounded hover:bg-teal-800">VIEW LOCATION</button>
            <button class="flex-1 border border-teal-700 text-teal-700 py-2 text-xs font-bold rounded hover:bg-teal-50">BOOK NOW</button>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow">
        <div class="p-6">
          <h3 class="text-xl font-bold text-teal-900 mb-2">AGH Dammam</h3>
          <p class="text-sm text-gray-600 mb-4 italic">Equipped with the latest medical technologies in the heart of Dammam.</p>
          <div class="space-y-2 text-sm text-gray-700">
            <p><strong>📍 Location:</strong> Dammam, KSA</p>
            <p><strong>📞 Phone:</strong> +966 13 826 2111</p>
            <p><strong>🕒 Hours:</strong> 24/7 (Emergency)</p>
          </div>
          <div class="mt-6 flex gap-2">
            <button class="flex-1 bg-teal-700 text-white py-2 text-xs font-bold rounded hover:bg-teal-800">VIEW LOCATION</button>
            <button class="flex-1 border border-teal-700 text-teal-700 py-2 text-xs font-bold rounded hover:bg-teal-50">BOOK NOW</button>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow">
        <div class="p-6">
          <h3 class="text-xl font-bold text-teal-900 mb-2">AGH Jubail</h3>
          <p class="text-sm text-gray-600 mb-4 italic">Serving the industrial community with specialized trauma care.</p>
          <div class="space-y-2 text-sm text-gray-700">
            <p><strong>📍 Location:</strong> Jubail Industrial City, KSA</p>
            <p><strong>📞 Phone:</strong> +966 13 361 1000</p>
            <p><strong>🕒 Hours:</strong> 24/7 (Emergency)</p>
          </div>
          <div class="mt-6 flex gap-2">
            <button class="flex-1 bg-teal-700 text-white py-2 text-xs font-bold rounded hover:bg-teal-800">VIEW LOCATION</button>
            <button class="flex-1 border border-teal-700 text-teal-700 py-2 text-xs font-bold rounded hover:bg-teal-50">BOOK NOW</button>
          </div>
        </div>
      </div>

    </div>
  </section>

</body>
<?php get_footer(); ?>
