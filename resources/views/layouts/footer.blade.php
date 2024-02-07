
<footer class="bg-gradient-to-r from-primary to-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0 flex flex-col justify-between">
              <a href="{{route('login')}}" class="flex items-center">
                  <img src="{{asset('img/crown.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap text-accent cinzel-decorative">Royal Crown</span>
              </a>
                <span class="text-secondary text-xs mt-5">@Powered By SaiZ</span>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-secondary">Main </h2>
                  <ul class="text-gray-400 font-medium">
                      <li>
                          <a href="https://laravel.com/" target="_blank" class="hover:underline">PHP Larvel</a>
                      </li>
                      <li class="my-4">
                          <a href="https://tailwindcss.com/" target="_blank" class="hover:underline">Tailwind CSS</a>
                      </li>
                      <li>
                        <a href="https://jquery.com/" target="_blank" class="hover:underline">JQuery</a>
                    </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-secondary uppercase">Tech</h2>
                  <ul class="text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://laravel.com/docs/10.x/starter-kits#laravel-breeze" target="_blank" class="hover:underline ">Breeze</a>
                      </li>
                      <li>
                          <a href="https://flowbite.com/" target="_blank" class="hover:underline">Flowbite</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-secondary uppercase">Libraries</h2>
                  <ul class="text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="https://fontawesome.com/" target="_blank" class="hover:underline">FontAwesome</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://datatables.net/" target="_blank" class="hover:underline">Datatable</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://izitoast.marcelodolza.com/" target="_blank" class="hover:underline">iziToast</a>
                    </li>
                    <li>
                        <a href="https://fonts.google.com/" target="_blank" class="hover:underline">Google Fonts</a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{\Carbon\Carbon::now()->year}} <a href="#" class="hover:underline">RoyalCrown™</a>. All Rights Reserved.
          </span>
        <div class="flex mt-4 space-x-5 justify-center sm:mt-0">
            @foreach (config('social') as $title => $data)
                <a href="{{ $data['link'] }}" target="_blank" class="text-accent hover:text-secondary hover:scale-150 transition" title="{{$title}}">
                    <i class="{{ $data['icon'] }}"></i>
                </a>
            @endforeach
        </div>
      </div>
    </div>
</footer>
