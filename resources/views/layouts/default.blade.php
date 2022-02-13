<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- NAVBAR BEGINS --}}
    <div class="dark:bg-gray-900">
            <div class="container mx-auto relative">
                <div class="py-4 mx-4 md:mx-6">
                    <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 py-4">
                        <div>
                            <div class="" role="img" aria-label="luxe. Logo.">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg1.svg" alt="logo">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg1dark.svg" alt="logo">
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <ul class="flex items-center space-x-6">
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white dark:hover:text-gray-300 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> New </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white dark:hover:text-gray-300 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Men </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white dark:hover:text-gray-300 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Women </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white dark:hover:text-gray-300 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Kids </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white dark:hover:text-gray-300 text-base text-right text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline"> Magazine </a>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden md:flex items-center space-x-4">
                            <a aria-label="my account" href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100 p-0.5 rounded">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2.svg" alt="account">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2dark.svg" alt="account">
                            </a>
                            <a aria-label="Favourites" href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100 p-0.5 rounded">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3.svg" alt="Favourites">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3dark.svg" alt="Favourites">
                            </a>
                            <a aria-label="Bag" href="javascript:void(0)" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100 p-0.5 rounded">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4.svg" alt="bag">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4dark.svg" alt="bag">
                            </a>
                        </div>

                        <div class="md:hidden">
                            <button aria-label="open menu" onclick="openMenu()" class="focus:outline-none focus:ring-2 focus:ring-gray-800 rounded">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg5.svg" alt="toggler">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg5dark.svg" alt="toggler">
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 pb-4 flex space-x-3 border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg6.svg" alt="Search">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg6dark.svg" alt="Search">
                        </div>
                        <input type="text" placeholder="Search for products" class="focus:outline-none bg-transparent text-sm text-gray-600" />
                    </div>
                </div>

                <div id="mobile-menu" class="hidden dark:bg-gray-900 md:hidden absolute inset-0 z-10 flex flex-col w-full h-screen bg-white pt-6">
                    <div class="w-full">
                        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3 mx-4">
                            <div role="img" aria-label="Luxe. Logo">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg1.svg" alt="logo">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg1dark.svg" alt="logo">
                            </div>
                            <button aria-label="close menu" onclick="closeMenu()" class="text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg7.svg" alt="logo">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg7dark.svg" alt="logo">
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 mx-4">
                        <ul class="flex flex-col space-y-4">
                            <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                                <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> New </a>
                                <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                </button>
                            </li>
                            <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                                <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Men </a>
                                <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                </button>
                            </li>
                            <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                                <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Women </a>
                                <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                </button>
                            </li>
                            <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                                <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Kids </a>
                                <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                </button>
                            </li>
                            <li class="border-b border-gray-200 dark:border-gray-700 dark:text-gray-700 pb-4 px-1 flex items-center justify-between">
                                <a href="javascript:void(0)" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 text-base text-gray-800 hover:underline"> Magazine </a>
                                <button aria-label="Add" class="dark:text-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg8.svg" alt="add">
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full h-full flex items-end">
                        <ul class="bg-gray-50 dark:bg-gray-800 py-10 px-4 flex flex-col space-y-8 w-full">
                            <li>
                                <a class="flex items-center space-x-2 focus:outline-none text-gray-800 dark:text-white focus:ring-2 focus:ring-gray-800 hover:underline" href="javascript:void(0)">
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2.svg" alt="account">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg2dark.svg" alt="account">
                                    </div>
                                    <p class="text-base">My account</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center space-x-2 focus:outline-none text-gray-800 dark:text-white focus:ring-2 focus:ring-gray-800 hover:underline" href="javascript:void(0)">
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4.svg" alt="bag">
                                         <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg4dark.svg" alt="bag">
                                    </div>
                                    <p class="text-base">Bag</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center space-x-2 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline" href="javascript:void(0)">
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3.svg" alt="Favourites">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-III-svg3dark.svg" alt="Favourites">
                                    </div>
                                    <p class="text-base">Favourites</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- NAVBAR ENDS --}}
        @yield('content')
{{-- FOOTER BEGINS --}}
        <div class="mx-auto container xl:px-20 lg:px-12 sm:px-6 px-4 px-4 py-12">
            <div class="flex flex-col items-center justify-center">
                <div>
                    <svg class="text-gray-800 dark:text-white hover:text-gray-500" width="111" height="19" viewBox="0 0 111 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.376 15.336H11.728V18H0.0640001V2.16H3.376V15.336ZM18.154 18.24C17.354 18.24 16.634 18.096 15.994 17.808C15.354 17.52 14.842 17.064 14.458 16.44C14.09 15.816 13.906 14.992 13.906 13.968V6H17.194V13.176C17.194 14.104 17.386 14.752 17.77 15.12C18.154 15.472 18.706 15.648 19.426 15.648C20.114 15.648 20.722 15.4 21.25 14.904C21.794 14.392 22.066 13.576 22.066 12.456V6H25.354V18H22.426L22.306 15.912C21.906 16.696 21.354 17.28 20.65 17.664C19.946 18.048 19.114 18.24 18.154 18.24ZM31.4779 6L33.9979 10.176L36.5419 6H40.2619L36.0139 11.928L40.3339 18H36.5179L33.8539 13.656L31.1419 18H27.4219L31.8379 11.928L27.6379 6H31.4779ZM44.134 4.272C42.774 4.272 42.094 3.688 42.094 2.52C42.094 1.336 42.774 0.743999 44.134 0.743999C45.494 0.743999 46.174 1.336 46.174 2.52C46.174 3.688 45.494 4.272 44.134 4.272ZM45.766 6V18H42.478V6H45.766ZM64.7314 6H68.2354L64.3954 18H60.6034L57.9874 9.84L55.4674 18H51.6754L47.8354 6H51.3394L53.7394 15.192L56.4034 6H59.6674L62.3554 15.192L64.7314 6ZM75.4188 5.76C76.6188 5.76 77.6828 6.008 78.6108 6.504C79.5388 7 80.2588 7.712 80.7708 8.64C81.2988 9.568 81.5628 10.688 81.5628 12C81.5628 13.312 81.2988 14.432 80.7708 15.36C80.2588 16.288 79.5388 17 78.6108 17.496C77.6828 17.992 76.6188 18.24 75.4188 18.24C74.2028 18.24 73.1308 17.992 72.2028 17.496C71.2908 17 70.5708 16.288 70.0428 15.36C69.5308 14.432 69.2748 13.312 69.2748 12C69.2748 10.688 69.5308 9.568 70.0428 8.64C70.5708 7.712 71.2908 7 72.2028 6.504C73.1308 6.008 74.2028 5.76 75.4188 5.76ZM75.4188 8.208C74.5228 8.208 73.8188 8.528 73.3068 9.168C72.8108 9.792 72.5628 10.736 72.5628 12C72.5628 13.264 72.8108 14.216 73.3068 14.856C73.8188 15.48 74.5228 15.792 75.4188 15.792C76.2988 15.792 76.9868 15.48 77.4828 14.856C77.9948 14.216 78.2508 13.264 78.2508 12C78.2508 10.736 77.9948 9.792 77.4828 9.168C76.9868 8.528 76.2988 8.208 75.4188 8.208ZM89.7859 5.76C90.9859 5.76 92.0499 6.008 92.9779 6.504C93.9059 7 94.6259 7.712 95.1379 8.64C95.6659 9.568 95.9299 10.688 95.9299 12C95.9299 13.312 95.6659 14.432 95.1379 15.36C94.6259 16.288 93.9059 17 92.9779 17.496C92.0499 17.992 90.9859 18.24 89.7859 18.24C88.5699 18.24 87.4979 17.992 86.5699 17.496C85.6579 17 84.9379 16.288 84.4099 15.36C83.8979 14.432 83.6419 13.312 83.6419 12C83.6419 10.688 83.8979 9.568 84.4099 8.64C84.9379 7.712 85.6579 7 86.5699 6.504C87.4979 6.008 88.5699 5.76 89.7859 5.76ZM89.7859 8.208C88.8899 8.208 88.1859 8.528 87.6739 9.168C87.1779 9.792 86.9299 10.736 86.9299 12C86.9299 13.264 87.1779 14.216 87.6739 14.856C88.1859 15.48 88.8899 15.792 89.7859 15.792C90.6659 15.792 91.3539 15.48 91.8499 14.856C92.3619 14.216 92.6179 13.264 92.6179 12C92.6179 10.736 92.3619 9.792 91.8499 9.168C91.3539 8.528 90.6659 8.208 89.7859 8.208ZM103.217 18.24C102.225 18.24 101.337 17.992 100.553 17.496C99.7851 17 99.1771 16.296 98.7291 15.384C98.2971 14.456 98.0811 13.336 98.0811 12.024C98.0811 10.696 98.3131 9.568 98.7771 8.64C99.2411 7.696 99.8651 6.984 100.649 6.504C101.449 6.008 102.345 5.76 103.337 5.76C104.201 5.76 104.945 5.968 105.569 6.384C106.193 6.8 106.665 7.352 106.985 8.04V0.743999H110.273V18H107.321L107.177 15.672C106.841 16.472 106.321 17.104 105.617 17.568C104.913 18.016 104.113 18.24 103.217 18.24ZM104.177 15.72C105.025 15.72 105.705 15.392 106.217 14.736C106.729 14.064 106.985 13.12 106.985 11.904C106.985 10.752 106.729 9.864 106.217 9.24C105.721 8.6 105.057 8.28 104.225 8.28C103.329 8.28 102.625 8.6 102.113 9.24C101.617 9.864 101.369 10.784 101.369 12C101.369 13.216 101.617 14.144 102.113 14.784C102.609 15.408 103.297 15.72 104.177 15.72Z"
                            fill="currentColor"
                        />
                    </svg>
                </div>
                <div class="flex flex-wrap sm:gap-10 gap-8 items-center justify-center mt-8">
                    <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">About</a>
                    <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Contact us</a>
                    <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Terms of Service</a>
                    <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Privacy Policy</a>
                </div>
                <div class="flex items-center gap-x-8 mt-6">
                    <button aria-label="facebook" class="focus:ring-2 focus:ring-offset-2 focus:ring-2 focus:ring-gray-800 focus:outline-none rounded-full">
                        <svg class="fill-current text-gray-800 dark:text-white hover:text-gray-500" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 11.0631C21.5 5.26467 16.7984 0.56311 11 0.56311C5.20156 0.56311 0.5 5.26467 0.5 11.0631C0.5 16.3037 4.33906 20.6476 9.35938 21.4361V14.0992H6.69266V11.0631H9.35938V8.74983C9.35938 6.11873 10.9273 4.6642 13.3255 4.6642C14.4744 4.6642 15.6763 4.86952 15.6763 4.86952V7.45373H14.3516C13.048 7.45373 12.6402 8.2628 12.6402 9.09436V11.0631H15.552L15.087 14.0992H12.6406V21.437C17.6609 20.649 21.5 16.3051 21.5 11.0631Z" fill="currentColor" />
                        </svg>
                    </button>
                    <button aria-label="instagram" class="focus:ring-2 focus:ring-offset-2 focus:ring-2 focus:ring-gray-800 focus:outline-none rounded-full">
                        <svg class="fill-current text-gray-800 dark:text-white hover:text-gray-500" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.2969 12C14.2969 13.2686 13.2686 14.2969 12 14.2969C10.7314 14.2969 9.70312 13.2686 9.70312 12C9.70312 10.7314 10.7314 9.70312 12 9.70312C13.2686 9.70312 14.2969 10.7314 14.2969 12Z" fill="currentColor" />
                            <path
                                d="M17.3716 7.93616C17.2612 7.63696 17.085 7.36615 16.8561 7.14386C16.6339 6.91498 16.3632 6.73883 16.0638 6.62842C15.821 6.53412 15.4563 6.42188 14.7845 6.3913C14.0577 6.35815 13.8398 6.35101 12 6.35101C10.16 6.35101 9.94208 6.35797 9.21552 6.39111C8.5437 6.42188 8.17877 6.53412 7.93616 6.62842C7.63678 6.73883 7.36597 6.91498 7.14386 7.14386C6.91498 7.36615 6.73883 7.63678 6.62823 7.93616C6.53394 8.17896 6.42169 8.54388 6.39111 9.2157C6.35797 9.94226 6.35083 10.1602 6.35083 12.0002C6.35083 13.84 6.35797 14.0579 6.39111 14.7847C6.42169 15.4565 6.53394 15.8212 6.62823 16.064C6.73883 16.3634 6.91479 16.634 7.14368 16.8563C7.36597 17.0852 7.6366 17.2614 7.93597 17.3718C8.17877 17.4662 8.5437 17.5785 9.21552 17.6091C9.94208 17.6422 10.1598 17.6492 11.9998 17.6492C13.84 17.6492 14.0579 17.6422 14.7843 17.6091C15.4561 17.5785 15.821 17.4662 16.0638 17.3718C16.6648 17.14 17.1398 16.665 17.3716 16.064C17.4659 15.8212 17.5781 15.4565 17.6089 14.7847C17.642 14.0579 17.649 13.84 17.649 12.0002C17.649 10.1602 17.642 9.94226 17.6089 9.2157C17.5783 8.54388 17.4661 8.17896 17.3716 7.93616ZM12 15.5383C10.0457 15.5383 8.46149 13.9543 8.46149 12C8.46149 10.0457 10.0457 8.46167 12 8.46167C13.9541 8.46167 15.5383 10.0457 15.5383 12C15.5383 13.9543 13.9541 15.5383 12 15.5383ZM15.6782 9.14868C15.2216 9.14868 14.8513 8.77844 14.8513 8.32178C14.8513 7.86511 15.2216 7.49487 15.6782 7.49487C16.1349 7.49487 16.5051 7.86511 16.5051 8.32178C16.5049 8.77844 16.1349 9.14868 15.6782 9.14868Z"
                                fill="currentColor"
                            />
                            <path
                                d="M12 0C5.3736 0 0 5.3736 0 12C0 18.6264 5.3736 24 12 24C18.6264 24 24 18.6264 24 12C24 5.3736 18.6264 0 12 0ZM18.8491 14.8409C18.8157 15.5744 18.6991 16.0752 18.5288 16.5135C18.1708 17.4391 17.4391 18.1708 16.5135 18.5288C16.0754 18.6991 15.5744 18.8156 14.8411 18.8491C14.1063 18.8826 13.8715 18.8906 12.0002 18.8906C10.1287 18.8906 9.8941 18.8826 9.15912 18.8491C8.42578 18.8156 7.9248 18.6991 7.48663 18.5288C7.02667 18.3558 6.61029 18.0846 6.26605 17.7339C5.91559 17.3899 5.64441 16.9733 5.47137 16.5135C5.30109 16.0754 5.18445 15.5744 5.15112 14.8411C5.11725 14.1061 5.10938 13.8713 5.10938 12C5.10938 10.1287 5.11725 9.89392 5.15094 9.15912C5.18427 8.4256 5.30072 7.9248 5.47101 7.48645C5.64404 7.02667 5.91541 6.61011 6.26605 6.26605C6.61011 5.91541 7.02667 5.64423 7.48645 5.47119C7.9248 5.3009 8.4256 5.18445 9.15912 5.15094C9.89392 5.11743 10.1287 5.10938 12 5.10938C13.8713 5.10938 14.1061 5.11743 14.8409 5.15112C15.5744 5.18445 16.0752 5.3009 16.5135 5.47101C16.9733 5.64404 17.3899 5.91541 17.7341 6.26605C18.0846 6.61029 18.356 7.02667 18.5288 7.48645C18.6993 7.9248 18.8157 8.4256 18.8492 9.15912C18.8828 9.89392 18.8906 10.1287 18.8906 12C18.8906 13.8713 18.8828 14.1061 18.8491 14.8409Z"
                                fill="currentColor"
                            />
                        </svg>
                    </button>
                    <button aria-label="pinterest" class="focus:ring-2 focus:ring-offset-2 focus:ring-2 focus:ring-gray-800 focus:outline-none rounded-full">
                        <svg class="fill-current text-gray-800 dark:text-white hover:text-gray-500" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0027 0.554382C5.37441 0.554382 0 5.94525 0 12.5938C0 17.5224 2.9578 21.7577 7.18553 23.6228C7.15338 22.7843 7.18017 21.7739 7.39451 20.8602C7.62492 19.882 8.93771 14.2976 8.93771 14.2976C8.93771 14.2976 8.55191 13.529 8.55191 12.3949C8.55191 10.6105 9.58071 9.27759 10.8667 9.27759C11.9598 9.27759 12.4849 10.0999 12.4849 11.0835C12.4849 12.1853 11.783 13.83 11.424 15.3564C11.1239 16.6356 12.0616 17.6729 13.3208 17.6729C15.5928 17.6729 17.1253 14.7437 17.1253 11.2716C17.1253 8.63262 15.3516 6.66009 12.1313 6.66009C8.49297 6.66009 6.22103 9.38508 6.22103 12.4272C6.22103 13.4753 6.53181 14.217 7.01407 14.7867C7.23376 15.0501 7.26591 15.1576 7.18553 15.4585C7.12659 15.6789 6.99799 16.211 6.93905 16.426C6.85867 16.7324 6.61219 16.8398 6.33891 16.727C4.66176 16.039 3.87944 14.2008 3.87944 12.1262C3.87944 8.70786 6.75686 4.60694 12.4581 4.60694C17.0395 4.60694 20.0563 7.9339 20.0563 11.5027C20.0563 16.2271 17.436 19.753 13.578 19.753C12.2813 19.753 11.065 19.0489 10.647 18.2534C10.647 18.2534 9.95043 21.0268 9.8004 21.5642C9.54856 22.4941 9.05023 23.4185 8.59478 24.1441C9.6996 24.471 10.8454 24.6376 11.9973 24.6386C18.6256 24.6386 24 19.2477 24 12.5992C24 5.95062 18.6309 0.554382 12.0027 0.554382Z"
                                fill="currentColor"
                            />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center mt-6">
                    <p class="text-base leading-4 text-gray-800 dark:text-gray-400">2021 <span class="font-semibold">Luxiwood</span></p>
                    <div class="border-l border-gray-800 pl-2 ml-2">
                        <p class="text-base leading-4 text-gray-800 dark:text-gray-400">Inc. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    {{-- FOOTER ENDS --}}
    </body>
</html>