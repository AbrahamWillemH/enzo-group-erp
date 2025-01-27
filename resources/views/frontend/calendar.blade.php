@extends('admin/sidebar_admin')
@section('title', 'Calendar')
@section('konten')

<div class="ml-[20%]">
    <!-- Header -->
    <header class="fixed top-0 right-0 w-[80%] bg-green-shadow h-[68px] flex items-center justify-between px-4">
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold text-brown-enzo mr-4" style="letter-spacing: 1px">Januari 2025</h1>
            <button 
                class="text-brown-enzo font-semibold flex items-center justify-center px-2 py-2 rounded-full hover:bg-brown-enzo hover:text-white transition-all duration-300 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <a href="#" 
                class="text-brown-enzo font-semibold flex flex-col justify-center items-center group px-4 py-2 rounded-full border-2 border-brown-enzo hover:bg-brown-enzo hover:text-white transition-all duration-300" 
                style="letter-spacing: 1px">Today
            </a>
            <button 
                class="text-brown-enzo font-semibold flex items-center justify-center px-2 py-2 rounded-full hover:bg-brown-enzo hover:text-white transition-all duration-300 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        
        <div class="relative group">
            <button class="text-brown-enzo font-semibold flex flex-col justify-center items-center w-[140px] mr-5" style="letter-spacing: 1px">
                Produk
                <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
            </button>

            <!-- Dropdown Filter -->
            <div class="absolute bg-white shadow-lg rounded-md z-30 top-full left-0 w-[140px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-500">
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-[#efeff6] hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 border-invit-cal accent-invit-cal" value="Invitation" checked>
                        Invitation
                    </label>
                </div>
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-[#eee8f0] hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 border-pack-cal accent-pack-cal" value="Packaging" checked>
                        Packaging
                    </label>
                </div>
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-[#f2e9e9] hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 border-souv-cal accent-souv-cal" value="Souvenir" checked>
                        Souvenir
                    </label>
                </div>
            </div>
        </div>
    </header>
    <table class="w-full mt-[70px]">
        <thead>
          <tr>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Sunday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sun</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Monday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mon</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Tuesday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Tue</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Wednesday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Wed</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Thursday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Thu</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Friday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Fri</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Saturday</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sat</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center h-20">
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
                <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                  <div class="top mt-1 h-5 w-full">
                    <span class="text-gray-500">29</span>
                  </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer text-left">
                  <div
                    class="event bg-invit-cal text-white rounded p-1 text-sm mb-1 hover:bg-invit-cal-hover"
                  >
                    <span class="event-name">
                      Robby Shopee
                    </span>
                  </div>
                  <div
                    class="event bg-pack-cal text-white rounded p-1 text-sm mb-1 hover:bg-pack-cal-hover"
                  >
                    <span class="event-name">
                      Sofia De Eerste
                    </span>
                  </div>
                  <div
                    class="event bg-souv-cal text-white rounded p-1 text-sm mb-1 hover:bg-souv-cal-hover"
                  >
                    <span class="event-name">
                      John English
                    </span>
                  </div>
                  <div
                    class="text-left event rounded p-1 text-sm mb-1 hover:bg-gray-300"
                  >
                    <span class="event-name">
                      3 more
                    </span>
                  </div>                    
                </div>
              </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">30</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">31</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">1</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">2</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">3</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                  <div
                    class="event bg-pack-cal text-white rounded p-1 text-sm mb-1 hover:bg-pack-cal-hover"
                  >
                    <span class="event-name">
                      Robin Dish
                    </span>
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500 text-sm">4</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
          </tr>

          <!--         line 1 -->
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">5</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">6</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">7</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">8</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">9</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">10</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500 text-sm">11</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
          </tr>
          <!-- line 1 -->

          <!-- line 2 -->
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">12</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">13</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">14</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full flex justify-center items-center">
                  <span class="text-white border border-gray-600 bg-gray-600 rounded-full w-6 h-6 flex items-center justify-center">
                    15
                  </span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">16</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">17</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500 text-sm">18</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
          </tr>
          <!--         line 2 -->

          <!--         line 3 -->
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">
                    19
                  </span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">20</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">21</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">22</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">23</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">24</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500 text-sm">25</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
          </tr>
          <!--         line 3 -->

          <!--         line 4 -->
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">26</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">27</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>           
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
                <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                  <div class="top mt-1 h-5 w-full">
                    <span class="text-gray-500">28</span>
                  </div>
                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                </div>
              </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">29</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border  p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">30</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500">31</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease  hover:bg-gray-200">
              <div class="flex flex-col h-40 xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 overflow-hidden">
                <div class="top mt-1 h-5 w-full">
                  <span class="text-gray-500 text-sm">1</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
          </tr>
          <!--         line 4 -->
        </tbody>
    </table>
</div>