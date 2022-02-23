<?php

$insert=false;
$noinsert=false;
if (isset($_POST['name'])) 
{
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO `ngo`.`ngo` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

if ($con->query($sql)==true) {
  $insert=true;
} 
else {
  $noinsert=true;
}
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="index.php">


  <title> World Vision NGO  </title>
</head>
<body>
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>

<!-- NAVBAR -->
<header class="text-green-900 bg-white">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center md:ml-auto">
      <div id="op">

      <a href="#services" class="mr-5 hover:text-green-500   font-extrabold">Services</a>
      <a href="#gallery" class="mr-5 hover:text-green-500   font-extrabold">Gallery</a>
      <a href="#ourteam" class="mr-5 hover:text-green-500   font-extrabold">Our Team</a>
      <a href="#contact" class="mr-5 hover:text-green-500   font-extrabold">Contact</a>
      
      </div>
    </nav>
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
   
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      <div id="fo">
      <span class="ml-3 text-xl font-extrabold text-cyan-700 zoom"> &#129503 World Vision NGO</span>
      </div> 
    </a>
    
    
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
      <div id="donate">
      <button class="inline-flex items-center bgrder-0 py-1 px-3 focus:outline-none hover:text-green-500 rounded text-base mt-4 md:mt-0 font-extrabold text-center">
        <a href="donate.php"> Donate 💰</a>
        <svg fill="rounded" stroke="#7c2d12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
          
        </svg>
      </button>
    </div>
  </div>
</header>

<!-- Content -->
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">

        <img  alt="content" class="object-cover object-center" src="1.png" >
      </div>
      

      <div class="flex flex-col sm:flex-row mt-10">

        
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-50 h-18 flex items-center items-center justify-center bg-black-200 text-gray-400">
             <img src="child.png"> 
          </div>

          <div class="flex flex-col items-center text-center justify-center">

          <div id="f">
            <h2 class="font-medium title-font mt-4 text-green-900 text-lg font-extrabold text-brown-900"> <div id="f"> &#129503 World Vision NGO </h2>
           </div>

            
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"> </div>
            <div id="kk">  
            <p class="text-base font-bold text-green-500">Welcome to WV NGO Organisation 🤗. Here WV refers to World Vision and NGO refers to Non-Governmental Organizations.</p>
            </div>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <div id="txt">
          <p class="leading-relaxed text-lg mb-4 text-gray-100">This organisation is supported by AnsrCoach team. The HOD of WV NGO is Mr.Gurpreet Maini. We utilise already available resources near the villages and slums for these children. The idea is to reach maximum number of children whose parents are not more or any other problem. We don’t just focus on academic teaching, but also engage these children in sports and extracurricular activities ✔️.
          <br> There is no restriction for anyone. This NGO is totally depends upon those people who donate for welfare of these childrens. So, if you find any children with ugly condition must remember us and if you are able to donate then must donate for these children 🙏🏻.</br></p>
          </div>
          
           
        </div>
      </div>
    </div>
  </div>
</section>




<!-- Services -->
<section class="text-gray-600 body-font" id="services">
  <div class="container px-5 py-24 mx-auto" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">

    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <div id="ser">
      <h1 class="sm:text-3xl text-2xl font-extrabold title-font mb-2 text-yellow-700"> <div id="res"> Services 🧡 </div> </h1>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed font-bold text-yellow-500">We are the one with enough services which are totally depend upon donation and some inputs from our team.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border-8 border-red-700 p-6 rounded-lg tikki cur">
          <div class="w-15 h-15 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <img src="eat.jpg" >
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <h2 class="text-lg text-red-700 title-font mb-2"> <div class="s">Food&Clothes Facility 🥗👚 </div> </h2>
          <div class="i">
          <p class="leading-relaxed text-base font-bold text-red-700">We provide 3 time nutritious food and and reuse as well as take unnecessary clothes from other for childrens</p>
          </div>        
        </div>
      </div>


      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border-8 border-purple-600 p-6 rounded-lg tikki cur">
          <div class="w-15 h-15 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <img src="study.jpg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <h2 class="text-lg text-purple-600 font-extrabold title-font mb-2"><div class="s">Education 📚✍️ </h2>
          <div class="i">
          <p class="leading-relaxed text-base font-bold text-purple-600">We are not that much able to educate our childer for higher education but we totally give Secondary Education to students.</p>
          </div>      
        </div>
      </div>


      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border-8 border-green-700 p-6 rounded-lg tikki cur">
          <div class="w-15 h-15 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <img src="env.jpg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>              
            </svg>
          </div>
          <h2 class="text-lg text-green-700 font-extrabold title-font mb-2"> <div class="s">Environment Friendly 🌱🌲</h2>
          <div class="i"> 
          <p class="leading-relaxed text-base font-bold text-green-700">We have a proper Garden and different types of Trees & Plants so that childers can know the value of Nature</p>
          </div>
        </div>
      </div>


      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border-8 border-blue-700 p-6 tikki cur">
          <div class="w-15 h-15 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <img src="play.jpg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
            </svg>
          </div>
          <h2 class="text-lg text-blue-700 font-extrabold  title-font mb-2"> <div class="s">Sports Activity ⚽🏏</h2>
          <div class="i">
          <p class="leading-relaxed text-base text-blue-700 font-bold">We have mainly two Playground one is for Atheletes and other is for Cricket & Football. As these are majorly recommended by childrens.</p>
          </div>
        </div>
      </div>



      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border-8 border-gray-200 p-6 rounded-lg tikki cur">
      <div class="w-15 h-15 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
        <img src="moral.jpg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
          </div>
           <h2 class="text-lg text-gray-200 font-extrabold  title-font mb-2"> <div class="s">Moral Values 🧑‍⚕️</h2>
          <div class="i">  
          <p class="leading-relaxed text-base text-gray-200 font-bold">Every month we organise a seminar in which our team members discuss about moral ethics to childrens for the welfare of our society.</p>
          </div>        
        </div>
      </div>


      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border-8 border-pink-700 p-6 rounded-lg tikki cur">
          <div class="w-15 h-15 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            <img src="celebrate.jpg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <h2 class="text-lg text-pink-700 font-extrabold title-font mb-2"> <div class="s">Celebration 🎉🎈</h2>
          <div class="i">
          <p class="leading-relaxed text-base font-bold text-pink-700">We never let any of our children to feel alone that's we we celebrate their birthday as well as festivals.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Gallary -->
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000" id="gallery">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-extrabold title-font text-blue-300 lg:w-1/3 lg:mb-0 mb-4 ij">Gallery 💙
      </h1>
      </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block cur transitions" src="g1.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block cur transitions" src="g2.jpg">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block cur transitions" src="g3.jpg">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block cur transitions" src="g4.png">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block cur transitions" src="g5.png">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block cur transitions" src="g6.jpg">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Team -->
<section class="text-gray-600 body-font" id="ourteam">
  <div class="container px-5 py-24 mx-auto" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000" >
    <div class="flex flex-col text-center w-full mb-20">
      <div id="team">
      <h1 class="sm:text-3xl text-2xl font-extrabold title-font mb-4 text-purple-800"> <div id="go"> Our Team 💜 </div> </h1>
      </div>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-purple-400 font-bold ">This NGO is organise and initialize by AnsrCoach and these are the head of our departments. We really feel very proud to have them in FO-FU NGO.</p>
    </div>

    <div class="flex flex-wrap -m-2">
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-blue-700 border-4 p-4 rounded-lg border-double fade cur">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="gurpreet.jpg">
          <div class="flex-grow">
            <h2 class="text-blue-700 title-font font-extrabold">Gurpreet Maini</h2>
            <p class="text-blue-700 font-bold font-style: italic">HOD of all the Departments</p>
          </div>
        </div>
      </div>

      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-yellow-700 border-4 p-4 rounded-lg border-double fade cur">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="ishan.jpeg">
          <div class="flex-grow">
            <h2 class="text-yellow-700 title-font font-extrabold">Ishan Mongia</h2>
            <p class="text-yellow-700 font-bold font-style: italic">HOD of Environment Facility</p>
          </div>
        </div>
      </div>

      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-pink-700 border-4 p-4 rounded-lg border-double fade cur">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="aniket.jpeg">
          <div class="flex-grow">
            <h2 class="text-pink-700 title-font font-extrabold">Aniket Kumar</h2>
            <p class="text-pink-700 font-bold font-style: italic">HOD of Sports</p>
          </div>
        </div>
      </div>

      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-white-700 border-4 p-4 rounded-lg border-double fade cur">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="gaurav.jpeg">
          <div class="flex-grow">
            <h2 class="text-yellow-200 title-font font-extrabold ">Gaurav Verma</h2>
            <p class="text-yellow-200 font-bold font-style: italic">HOD of Food and Clothes Facility</p>
          </div>
        </div>
      </div>

      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-red-500 border-4 p-4 rounded-lg border-double fade cur">
          <img alt="team" class="w-16 h-16 bg-yellow-200 object-cover object-center flex-shrink-0 rounded-full mr-4" src="preeti.jpeg">
          <div class="flex-grow">
            <h2 class="text-red-500 title-font font-extrabold">Preeti Sahni</h2>
            <p class="text-red-500 font-style: italic font-bold">HOD of Education</p>
          </div>
        </div>
      </div>

      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-green-700 border-4 p-4 rounded-lg border-double fade cur">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="vipul.jpeg">
          <div class="flex-grow">
            <h2 class="text-green-700 title-font font-extrabold ">Vipul Mongia</h2>
            <p class="text-green-700 font-bold font-style: italic">HOD of Moral Values</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact us -->
<div id="contact">
<section class="text-gray-600 body-font relative" id="contact">
  <div class="container px-5 py-24 mx-auto" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-extrabold title-font mb-4 text-black">Contact Us ☎️</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-black font-bold">Enter your detail and the message that you want to send.</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
    <form action="index.php" method="post">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-black font-bold">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border-4 border-black focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-black font-bold">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border-4 border-black focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-black font-bold">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border-4 border-black focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-red-900 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Submit</button>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-black font-bold">gurpreetmaini693@gmail.com</a>
          <p class="leading-normal my-5 font-bold text-black">7889100315
          </p>
          <span class="inline-flex">
            <a class="text-blue-700 iko">
              <svg fill="currentColor"stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <a href="https://www.facebook.com/people/Gurpreet-Singh-Maini/100009292842370/">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
                </a>
            <a class="ml-4 text-red-700 pko">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <a href="https://www.instagram.com/gurpreet_maini91/">
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>           
          </span>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
</section>


</body>
</html>
