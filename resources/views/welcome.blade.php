<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com">
    </script>
</head>
{{-- <body style="background-image:linear-gradient(115deg,#CCD0CF,#06141B)"> --}}

    <body style="background-image:linear-gradient(115deg,#DEDCDC,#C5BAC4,#979DAB,#7E919F,#57707A)">
        


    <!-- Main container to hold both sections -->
    <div class=" flex min-h-screen">

        <!-- Left Sticky Section -->
        <aside style="background-image:linear-gradient(115deg,#577071,#191D23)"
         class="w-1/6 text-white text-sm sticky top-0 h-screen flex flex-col items-center md:text-lg">
            <div class="text-sm font-mono p-6 md:text-lg">
                SBHTRAI
            </div>
            <nav class="mt-44 space-y-6 text-center">
                <a href="#home" id="home-link" class="block py-2 px-4 hover:bg-gray-700">Home</a>
                <a href="#about" id="about-link" class="block py-2 px-4 hover:bg-gray-700">About</a>
                <a href="#services" id="services-link" class="block py-2 px-4 hover:bg-gray-700">Services</a>
                <a href="#works" id="works-link" class="block py-2 px-4 hover:bg-gray-700">Works</a>
            </nav>
        </aside>

        <!-- Right Scrollable Section -->
        
        <section class="flex-1 p-12 text-center overflow-y-auto ">
            <section id="home">
          <div class="text-center ">
           
                <h1 class="text-4xl font-bold text-red-500 transition-opacity duration-500 delay-300 opacity-0 hover:opacity-100">
                 Dear visitor ,  Warm Greeting
                </h1>
              </div>
            <h1 class="text-4xl font-bold mb-4 justify-center mt-24">Hi, I am</h1>
            <h2 class="text-6xl font-extrabold mb-8">GRAPHIC DESIGNER & LARAVEL DEVELOPER.</h2>

            <!-- Buttons -->
            <div class="mt-12">
               <button class="px-6 py-2 rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800">HIRE ME </button>
              
               
            </div>
            </section>



            {{-- about section begins --}}


            <section id="about" class="h-screen flex justify-center items-center">

            
               
                <div class="text-center md:text-left">
                  
                    <h1 class="text-3xl text-center font-bold mb-4 text-black">About</h1>
                    <p class="text-xl mb-6">Hi There! I am Sachin Bhattarai, and freelancer for you.</p>

                    <div class="space-y-4 text-lg">
                        <p><strong>Name</strong> : Sachin Bhattarai</p>
                        <p><strong>Birthday</strong> : 17 Aug 2000</p>
                        <p><strong>Phone</strong> : 9847033795</p>
                        <p><strong>Email</strong> : sachinbhtrai7@gmail.com</p>
                        <p><strong>From</strong> : Sainamaina -4, Muriya, Rupandehi</p>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="ml-12">
                    <div class="w-64 h-64 bg-gray-400 rounded-lg flex items-center justify-center">
                        <span class="text-black">
                            <img src="images\IMG_5831.JPG" alt="">
                        </span>
                    </div>
                </div>
            </section>
        

                
           
              

<!-- SERVICES -->
                
  <section id="services" class="text-center text-4xl mb-5">
    <h1 class="text-3xl font-bold">
    Services
    </h1>     

        <!-- Container to hold the boxes -->
<div class="bg-gray-200 mt-4 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-4 mx-10 justify-center mb-11 mt-10">
        
        <!-- Box 1 with Background Image -->
        <div class="flex flex-col items-center">
            <div class="h-64 w-full p-10 rounded-lg shadow-md bg-cover bg-center bg-no-repeat"
                 style="background-image: url('images/graphic.jpg');">
            </div>
            <h1 class="text-center text-xl font-bold text-gray-800 mt-4">Graphic Designing</h1>
        </div>

        <!-- Box 2 with Background Image -->
        <div class="flex flex-col items-center">
            <div class="h-64 w-full p-10 rounded-lg shadow-md bg-cover bg-center bg-no-repeat"
                 style="background-image: url('images/uiux.jpeg');">
            </div>
            <h1 class="text-center text-xl font-bold text-gray-800 mt-4">UI/UX</h1>
        </div>

        <!-- Box 3 with Background Image -->
        <div class="flex flex-col items-center">
            <div class="h-64 w-full p-10 rounded-lg shadow-md bg-cover bg-center bg-no-repeat"
                 style="background-image: url('images/figma.jpeg');">
            </div>
            <h1 class="text-center text-xl font-bold text-gray-800 mt-4">Product Designing</h1>
        </div>

        <!-- Box 4 with Background Image -->
        <div class="flex flex-col items-center">
            <div class="h-64 w-full p-10 rounded-lg shadow-md bg-cover bg-center bg-no-repeat"
                 style="background-image: url('images/webdesign.jpeg');">
            </div>
            <h1 class="text-center text-xl font-bold text-gray-800 mt-4">Web Design</h1>
        </div>

        <!-- Box 5 with Background Image -->
        <div class="flex flex-col items-center">
            <div class="h-64 w-full p-10 rounded-lg shadow-md bg-cover bg-center bg-no-repeat"
                 style="background-image: url('images/laravel.jpeg');">
            </div>
            <h1 class="text-center text-xl font-bold text-gray-800 mt-4">Laravel</h1>
        </div>

        <!-- Box 6 with Background Image -->
        <div class="flex flex-col items-center">
            <div class="h-64 w-full p-10 rounded-lg shadow-md bg-cover bg-center bg-no-repeat"
                 style="background-image: url('images/tailwind.jpeg');">
            </div>
            <h1 class="text-center text-xl font-bold text-gray-800 mt-4">Tailwind CSS</h1>
        </div>

    </div>
</div>


        
  </section>
    

    <!-- SERVICES END  -->




                <!-- MY WORKS 2 -->
                <section id="works" class="py-10">
    <div class="container mx-auto px-4">
        <!-- Heading Section -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">My Works</h2>
        </div>
        
        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
            <div class="product shadow-lg rounded-lg overflow-hidden transition-transform hover:shadow-2xl duration-300" style="border: 2px solid #ddd;">
                <a href="#" class="block h-64 overflow-hidden">
                    <img class="w-full h-full object-cover" src="images/Frame 10.jpg" alt="Product Image">
                </a>
                <div class="text-center py-4 px-3"> 
                    <div>
                         <span > <button class="rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800 px-6 py-2">WEB</button></span>
                    </div>                
                </div>
            </div>

            <div class="product shadow-lg rounded-lg overflow-hidden transition-transform hover:shadow-2xl duration-300" style="border: 2px solid #ddd;">
                <a href="#" class="block h-64 overflow-hidden">
                    <img class="w-full h-full object-cover" src="images/1 complete.jpg" alt="Product Image">
                </a>
                <div class="text-center py-4 px-3"> 
                    <div>
                         <span > <button class="rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800 px-6 py-2">GRAPHICS</button></span>
                    </div>                
                </div>
            </div>

            <div class="product shadow-lg rounded-lg overflow-hidden transition-transform hover:shadow-2xl duration-300" style="border: 2px solid #ddd;">
                <a href="#" class="block h-64 overflow-hidden">
                    <img class="w-full h-full object-cover" src="images/eidfinal.jpg" alt="Product Image">
                </a>
                <div class="text-center py-4 px-3"> 
                    <div>
                         <span > <button class="rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800 px-6 py-2">GRAPHICS</button></span>
                    </div>                
                </div>
            </div>

            <div class="product shadow-lg rounded-lg overflow-hidden transition-transform hover:shadow-2xl duration-300" style="border: 2px solid #ddd;">
                <a href="#" class="block h-64 overflow-hidden">
                    <img class="w-full h-full object-cover" src="images/decore.jpg" alt="Product Image">
                </a>
                <div class="text-center py-4 px-3"> 
                    <div>
                         <span > <button class="rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800 px-6 py-2">GRAPHICS</button></span>
                    </div>                
                </div>
            </div>

            <div class="product shadow-lg rounded-lg overflow-hidden transition-transform hover:shadow-2xl duration-300" style="border: 2px solid #ddd;">
                <a href="#" class="block h-64 overflow-hidden">
                    <img class="w-full h-full object-cover" src="images/Frame 100.jpg" alt="Product Image">
                </a>
                <div class="text-center py-4 px-3"> 
                    <div>
                         <span > <button class="rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800 px-6 py-2">UI/UX</button></span>
                    </div>                
                </div>
            </div>

            <div class="product shadow-lg rounded-lg overflow-hidden transition-transform hover:shadow-2xl duration-300" style="border: 2px solid #ddd;">
                <a href="#" class="block h-64 overflow-hidden">
                    <img class="w-full h-full object-cover" src="images/Untitled-1.jpg" alt="Product Image">
                </a>
                <div class="text-center py-4 px-3"> 
                    <div>
                         <span > <button class="rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800 px-6 py-2">GRAPHICS</button></span>
                    </div>                
                </div>
            </div>
          



        </div>

        <div class="flex justify-center mt-5">
            <a href="{{ route('viewall') }}">
                <button class="w-32 sm:w-[200px] rounded-full border bg-gray-700 border-gray-400 text-white hover:bg-gray-800 px-6 py-2">
                    View all
                </button>
            </a>
        </div>
        
    </div>
    
</section>
<hr>


            

 <footer class=" text-black font-bold bg-gray-300 py-4">
                <div class="mx-auto px-2 flex justify-between">
                    <div class=" space-x-3 text-3xl font-bold ">
                        <div class="flex space-x-3">
                        <h1 class="font-bold text-3xl">SBhtrai</h1>
                       
                        </div><br>

                    <div>
                    <ul class="text-lg">
                        <li>+977 9867350000</li>
                        <li>sachinbhtrai7@gmail.com</li>
                        <li>bhattaraisachin.com.np</li>
        
                    </ul>
                    </div>
                </div>
        
        
        
                <div class="mb-4">
                    <div class="font-bold text-2xl">Services</div><br>
                     <ul>
                    <li class="hover:text-yellow-600 ">Web Design</li>
                   <li class="hover:text-yellow-600 ">Graphics Design</li>
                   <li class="hover:text-yellow-600 ">Content Writing</li>
                   <li class="hover:text-yellow-600 ">Advertising</li>
                    
                    
        
                </div>
        
        
                <div>
                    <div class="font-bold text-2xl">
                        Subscribe
        
                    </div>
                    <br>
                    <input type="email" placeholder="Enter Email Address">
        
        
                </div>
                </div>
            </footer>
              
                </footer>



            
        </section>
    </div>
</body>

<script>
   const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('ul li a');

const options = {
  root: null,
  threshold: 0.5, // Adjust as needed
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    const id = entry.target.getAttribute('id');
    const link = document.querySelector(`a[href="#${id}"]`);

    if (entry.isIntersecting) {
      link.classList.add('text-blue-500'); // Active style
      link.classList.remove('text-gray-500'); // Remove inactive style
    } else {
      link.classList.remove('text-blue-500');
      link.classList.add('text-white');
    }
  });
}, options);

sections.forEach(section => {
  observer.observe(section);
});


</script>



</body>
</html>
