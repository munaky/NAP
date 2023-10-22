<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawasena Aisma Persada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <style>
        .testimony::-webkit-scrollbar {
            display: none;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body style="font-family: 'Montserrat', sans-serif;">
    <!-- Neutral 500 = secondary-text
        neutral 900 = main text
    Gray 600 = accent color -->
    <!-- Mobile view -->
    <div class="xl:hidden pt-8 w-screen h-max">
        <!-- Navbar -->
        <div class="w-full px-10 justify-between flex">
            <img src="{{ asset('assets/logo.png') }}" class="h-7"  alt="nawasena logo">

            <!-- Humberger menu -->
            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 23H25C25.6875 23 26.25 22.4375 26.25 21.75C26.25 21.0625 25.6875 20.5 25 20.5H5C4.3125 20.5 3.75 21.0625 3.75 21.75C3.75 22.4375 4.3125 23 5 23ZM5 16.75H25C25.6875 16.75 26.25 16.1875 26.25 15.5C26.25 14.8125 25.6875 14.25 25 14.25H5C4.3125 14.25 3.75 14.8125 3.75 15.5C3.75 16.1875 4.3125 16.75 5 16.75ZM3.75 9.25C3.75 9.9375 4.3125 10.5 5 10.5H25C25.6875 10.5 26.25 9.9375 26.25 9.25C26.25 8.5625 25.6875 8 25 8H5C4.3125 8 3.75 8.5625 3.75 9.25Z" fill="#83A9AC"/>
            </svg>
        </div>

        <!-- Hero -->
        <div class="py-14 px-10">
            <img src="{{ asset($data['home_main_image']) }}" class="w-full">
            <div class="ml-3 space-y-3 mt-5 mb-8">
                <h1 class="text-3xl font-semibold text-neutral-800">{{ $data['home_main_title'] }}</h1>
                <h5 class="text-sm text-neutral-500">{{ $data['home_main_text']}}</h5>
            </div>

            <a class="bg-gray-600 px-4 py-3 text-white rounded-lg ml-3 hover:font-semibold text-sm hover:rounded-3xl hover:text-gray-600 hover:shadow-inner hover:bg-neutral-100 how hover:border-gray-600 transition-all duration-500" href="{{ url('/product') }}">
                Cek Sekarang!
            </a>
            <a class="border-2 border-gray-600 px-4 py-3 text-gray-600 rounded-lg ml-3 text-sm font-semibold" href="{{ url('/product') }}">
                Kontak kami
            </a>
        </div>


        <!-- Kenapa nawasena -->
        <div class="w-full px-20 mt-14 py-10 flex flex-col items-center justify-center bg-gray-600">
            <h1 class="text-3xl font-semibold text-white text-center">Kenapa Nawasena?</h1>
            <div class="w-full py-3 flex items-center justify-left space-x-7 px-4 mt-14 bg-white rounded-xl">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="55" height="55" rx="20" fill="#4B5563"/>
                    <path d="M27.5 35.1855L33.5521 38.8459C34.6604 39.5167 36.0167 38.5251 35.725 37.2709L34.1208 30.3876L39.4729 25.7501C40.45 24.9042 39.925 23.3001 38.6417 23.198L31.5979 22.6001L28.8417 16.0959C28.3458 14.9146 26.6542 14.9146 26.1583 16.0959L23.4021 22.5855L16.3583 23.1834C15.075 23.2855 14.55 24.8896 15.5271 25.7355L20.8792 30.373L19.275 37.2563C18.9833 38.5105 20.3396 39.5021 21.4479 38.8313L27.5 35.1855Z" fill="white"/>
                </svg>
                <h3 class="text-xl font-semibold text-gray-600">Kualitas terbaik</h3>
            </div>
            <div class="w-full py-3 flex items-center justify-left space-x-7 px-4 mt-5 bg-white rounded-xl">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="55" height="55" rx="20" fill="#4B5563"/>
                    <path d="M16.0417 36.875H20.2084V24.375H16.0417V36.875ZM38.9584 25.4167C38.9584 24.2709 38.0209 23.3334 36.875 23.3334H30.3021L31.2917 18.5729L31.3229 18.2396C31.3229 17.8125 31.1459 17.4167 30.8646 17.1354L29.7604 16.0417L22.9063 22.9063C22.5209 23.2813 22.2917 23.8021 22.2917 24.375V34.7917C22.2917 35.9375 23.2292 36.875 24.375 36.875H33.75C34.6146 36.875 35.3542 36.3542 35.6667 35.6042L38.8125 28.2604C38.9063 28.0209 38.9584 27.7709 38.9584 27.5V25.4167Z" fill="white"/>
                    </svg>
                <h3 class="text-xl font-semibold text-gray-600">Pelayanan terbaik</h3>
            </div>
            <div class="w-full py-3 flex items-center justify-left space-x-7 px-4 mt-5 bg-white rounded-xl">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="55" height="55" rx="20" fill="#4B5563"/>
                    <path d="M37 25.5V21.75C37 20.375 35.875 19.25 34.5 19.25H19.5C18.125 19.25 17 20.375 17 21.75V25.5C15.625 25.5 14.5 26.625 14.5 28V34.25H16.1625L17 36.75H18.25L19.0875 34.25H34.925L35.75 36.75H37L37.8375 34.25H39.5V28C39.5 26.625 38.375 25.5 37 25.5ZM25.75 25.5H19.5V21.75H25.75V25.5ZM34.5 25.5H28.25V21.75H34.5V25.5Z" fill="white"/>
                    </svg>
                <h3 class="text-xl font-semibold text-gray-600">Dijamin Ori</h3>
            </div>
        </div>


        <div class="w-full">
            <h1 class="text-3xl font-semibold text-gray-600 text-center mt-14 mb-5">Testimoni</h1>
            <div class="testimony w-full flex justify-between items-start space-x-5 overflow-x-scroll p-8 bg-gray-600">
                <div class="bg-white rounded-lg w-[195px] flex flex-col flex-shrink-0 items-center justify-center py-4 px-4 text-center">
                    <img src="{{ asset('assets/testimony-1.png') }}" alt="">
                    <h5 class="text-lg text-gray-600 font-semibold">Kejora Marlian</h5>
                    <div class="flex space-x-2 mt-2">
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>

                    </div>
                    <p class="text-[12px] font-light text-neutral-500 mt-3">
                        Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
                    </p>
                </div>
                <div class="bg-white rounded-lg w-[195px] flex flex-col flex-shrink-0 items-center justify-center py-4 px-4 text-center">
                    <img src="{{ asset('assets/testimony-1.png') }}" alt="">
                    <h5 class="text-lg text-gray-600 font-semibold">Kejora Marlian</h5>
                    <div class="flex space-x-2 mt-2">
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>

                    </div>
                    <p class="text-[12px] font-light text-neutral-500 mt-3">
                        Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
                    </p>
                </div>
                <div class="bg-white rounded-lg w-[195px] flex flex-col items-center flex-shrink-0 justify-center py-4 px-4 text-center">
                    <img src="{{ asset('assets/testimony-1.png') }}" alt="">
                    <h5 class="text-lg text-gray-600 font-semibold">Kejora Marlian</h5>
                    <div class="flex space-x-2 mt-2">
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>

                    </div>
                    <p class="text-[12px] font-light text-neutral-500 mt-3">
                        Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
                    </p>
                </div>
            </div>
            <!-- Footer -->
    <footer class="footer-1 bg-gray-100 py-8 sm:py-12 bg-gray-600 text-white">
        <div class="container mx-auto px-4">
        <h5 class="text-2xl font-bold mb-6">Nawasena Aisma Persada</h5>
          <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">About</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Products</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Merchants</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Partners</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact</a>
                  </li>
              </ul>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Email</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Phone</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Instagram</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Shopee</a>
                  </li>
                  <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Tokopedia</a>
                  </li>
              </ul>
            </div>
            <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">

            </div>
          </div>

          <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
            <div class="sm:w-full px-4 md:w-1/6">
              <strong>Nawasena Aisma Persada</strong>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
              <h6 class="font-bold mb-2">Alamat</h6>
              <address class="not-italic mb-4 text-sm">
                123 6th St.<br>
                Lorem ipsum, FL 32904
              </address>
            </div>
            <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
              <button class="px-4 py-2 bg-blue-800 hover:bg-blue-900 rounded text-white">Contact us</button>
            </div>
          </div>
        </div>
      </footer>
        </div>
    </div>

    <!-- Desktop view -->
    <div class="xl:block hidden pt-8 w-screen h-max">
        <div class="w-full px-10 justify-between flex">
        <img src="{{ asset('assets/logo.png') }}" class="h-7"  alt="nawasena logo">

        <div class="flex items-center justify-center space-x-10 ">
            <a href="./" class="font-semibold">Beranda</a>
            <a href="#tentang">Tentang</a>
            <a href="#testimoni">Testimoni</a>
            <a href="{{ url('/product') }}">Produk</a>
            <a class="hover:border-2 w-ma   x hover:border-gray-600 px-4 py-3 flex justify-center items-center hover:text-gray-600 tracking-wide bg-gray-600 hover:bg-white text-white transition-all duration-500 rounded-lg text-sm font-semibold" href="{{ url('/product') }}">
                Kontak kami
            </a>
        </div>
    </div>

     <!-- Hero -->
     <div class="py-14 px-10 space-x-10 flex w-full items-center justify-center">
        <img src="{{ asset($data['home_main_image']) }}" class="w-[35rem]">
        <div class="flex flex-col justify-center">
            <div class="ml-3 space-y-3 mt-5 mb-8">
                <h1 class="text-7xl font-semibold w-[38rem] text-neutral-800 tracking-wide">{{ $data['home_main_title'] }}</h1>
                <h5 class="text-lg text-neutral-500 w-96">{{ $data['home_main_text'] }}</h5>
            </div>
            <div class="w-[18rem] ml-3 flex justify-between">
                <a class="bg-gray-600 w-max px-4 py-3 flex justify-center items-center text-white rounded-lg tracking-wide font-semibold text-sm hover:rounded-3xl hover:text-gray-600 hover:shadow-inner hover:bg-neutral-100 how hover:border-gray-600 transition-all duration-500" href="{{ url('/product') }}">
                    Cek Sekarang!
                </a>
                <a class="border-2 w-max border-gray-600 px-4 py-3 flex justify-center items-center text-gray-600 tracking-wide hover:bg-gray-600 hover:text-white transition-all duration-500 rounded-lg text-sm font-semibold" href="{{ url('/product') }}">
                    Kontak kami
                </a>
            </div>

            <h3 class="mt-10 ml-3 text-3xl font-semibold text-gray-600 mb-5">Kenapa Nawasena?</h3>
            <div class="grid grid-cols-2 gap-5 ml-3 w-[28rem]">
                <div class="px-5 py-3 w-max space-x-4 items-center justify-between flex text-gray-600 font-semibold rounded-2xl bg-neutral-100 shadow-inner">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="31" height="31" rx="5" fill="#4B5563"/>
                        <path d="M15.5 18.7938L18.0937 20.3625C18.5687 20.65 19.15 20.225 19.025 19.6875L18.3375 16.7375L20.6312 14.75C21.05 14.3875 20.825 13.7 20.275 13.6563L17.2562 13.4L16.075 10.6125C15.8625 10.1063 15.1375 10.1063 14.925 10.6125L13.7437 13.3938L10.725 13.65C10.175 13.6938 9.94995 14.3813 10.3687 14.7438L12.6625 16.7313L11.975 19.6813C11.85 20.2188 12.4312 20.6438 12.9062 20.3563L15.5 18.7938Z" fill="white"/>
                    </svg>
                    <h5>Kualitas Terbaik</h5>
                </div>
                <div class="px-5 py-3 w-max space-x-4 items-center justify-between flex text-gray-600 font-semibold rounded-2xl bg-neutral-100 shadow-inner">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="31" height="31" rx="5" fill="#4B5563"/>
                        <path d="M10.7639 19.375H12.4861V14.2083H10.7639V19.375ZM20.2361 14.6389C20.2361 14.1653 19.8486 13.7778 19.375 13.7778H16.6582L17.0672 11.8101L17.0802 11.6724C17.0802 11.4958 17.007 11.3322 16.8907 11.216L16.4343 10.7639L13.6013 13.6012C13.442 13.7562 13.3472 13.9715 13.3472 14.2083V18.5139C13.3472 18.9875 13.7347 19.375 14.2084 19.375H18.0834C18.4407 19.375 18.7464 19.1597 18.8756 18.8497L20.1759 15.8143C20.2146 15.7153 20.2361 15.6119 20.2361 15.5V14.6389Z" fill="white"/>
                    </svg>
                    <h5>Pelayanan Terbaik</h5>
                </div>
                <div class=" px-5 py-3 w-max space-x-4 items-center justify-between flex text-gray-600 font-semibold rounded-2xl bg-neutral-100 shadow-inner">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="31" height="31" rx="5" fill="#4B5563"/>
                        <path d="M15.5 18.7938L18.0937 20.3625C18.5687 20.65 19.15 20.225 19.025 19.6875L18.3375 16.7375L20.6312 14.75C21.05 14.3875 20.825 13.7 20.275 13.6563L17.2562 13.4L16.075 10.6125C15.8625 10.1063 15.1375 10.1063 14.925 10.6125L13.7437 13.3938L10.725 13.65C10.175 13.6938 9.94995 14.3813 10.3687 14.7438L12.6625 16.7313L11.975 19.6813C11.85 20.2188 12.4312 20.6438 12.9062 20.3563L15.5 18.7938Z" fill="white"/>
                    </svg>
                    <h5>Dijamin Ori</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-[826px] flex py-7 px-5 mt-14 bg-cover items-center justify-center space-x-14" style="background-image: url({{ asset('assets/bg-2.png') }});">
        <!--Text-->
        <div class="space-y-8">
            <h1 class="text-white font-semibold text-6xl w-[35rem] tracking-wide">{{ $data['home_second_title'] }}</h1>
            <p class="text-white text-lg w-[40rem] tracking-wide">{{ $data['home_second_text'] }}</p>
            <a class="bg-blue-800 w-max px-4 py-3 flex justify-center items-center text-white rounded-lg tracking-wide font-semibold text-sm hover:rounded-3xl hover:text-gray-600 hover:shadow-inner hover:bg-neutral-100 how hover:border-gray-600 transition-all duration-500" href="{{ url('/product') }}">
                Dapatkan Sekarang!
            </a>
        </div>

        <!--Products-->
        <div class="grid grid-cols-3 gap-8">
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset('assets/product-1.png') }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">ErgoComfort Sofa</h3>
                    <p class="text-neutral-500">150CM x 150CM</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. 350.000</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset('assets/product-1.png') }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">ErgoComfort Sofa</h3>
                    <p class="text-neutral-500">150CM x 150CM</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. 350.000</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset('assets/product-1.png') }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">ErgoComfort Sofa</h3>
                    <p class="text-neutral-500">150CM x 150CM</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. 350.000</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="./assets/product-1.png" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">ErgoComfort Sofa</h3>
                    <p class="text-neutral-500">150CM x 150CM</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. 350.000</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset('assets/product-1.png') }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">ErgoComfort Sofa</h3>
                    <p class="text-neutral-500">150CM x 150CM</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. 350.000</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset('assets/product-1.png') }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">ErgoComfort Sofa</h3>
                    <p class="text-neutral-500">150CM x 150CM</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. 350.000</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <h1 class="text-3xl font-semibold text-gray-600 text-center mt-14">Testimoni</h1>
        <div class="testimony flex justify-between items-start space-x-5 overflow-x-scroll p-8 bg-gray-600">
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="{{ asset('assets/kejora.png') }}" class="w-[10rem]">
            <h5 class="text-2xl text-gray-600 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="{{ asset('assets/kejora.png') }}" class="w-[10rem]">
            <h5 class="text-2xl text-gray-600 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="{{ asset('assets/kejora.png') }}" class="w-[10rem]">
            <h5 class="text-2xl text-gray-600 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="{{ asset('assets/kejora.png') }}" class="w-[10rem]">
            <h5 class="text-2xl text-gray-600 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="{{ asset('assets/kejora.png') }}" class="w-[10rem]">
            <h5 class="text-2xl text-gray-600 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="{{ asset('assets/kejora.png') }}" class="w-[10rem]">
            <h5 class="text-2xl text-gray-600 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="{{{ asset('assets/kejora.png') }}}" class="w-[10rem]">
            <h5 class="text-2xl text-gray-600 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>

    </div>
    <!-- Footer -->
    <footer class="footer-1 bg-gray-100 py-8 sm:py-12 bg-gray-600 text-white">
        <div class="container mx-auto px-4">
        <h5 class="text-2xl font-bold mb-6">Nawasena Aisma Persada</h5>
          <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">About</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Products</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Merchants</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Partners</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact</a>
                  </li>
              </ul>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Email</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Phone</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Instagram</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Shopee</a>
                  </li>
                  <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Tokopedia</a>
                  </li>
              </ul>
            </div>
            <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">

            </div>
          </div>

          <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
            <div class="sm:w-full px-4 md:w-1/6">
              <strong>Nawasena Aisma Persada</strong>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
              <h6 class="font-bold mb-2">Alamat</h6>
              <address class="not-italic mb-4 text-sm">
                123 6th St.<br>
                Lorem ipsum, FL 32904
              </address>
            </div>
            <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
              <button class="px-4 py-2 bg-blue-800 hover:bg-blue-900 rounded text-white">Contact us</button>
            </div>
          </div>
        </div>
      </footer>

    </div>

    </div>
</body>
</html>
