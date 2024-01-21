<div>
  <div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
            <div class="flex items-center">
              <p class="mb-0 dark:text-white/80">Asignacin de Timbre Electrónico</p>
              <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Settings</button>
            </div>
          </div>
          <div class="flex-auto p-6">
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-4">Datos del Contribuyente</p>
            {{-- Formulario Contribuyente --}}
            <div class="flex flex-wrap -mx-3">
              {{-- Cedula --}}
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">

                  <x-input-label>
                    Cedula:
                </x-input-label>
                <div class="flex mb-4">
                    <span class="mr-2">
                        <x-select class="w-20" wire:model="contribuyenteCreate.prefijo">
                            <option value="" disabled>
                                ...
                            </option>
                            <option value="V">V</option>
                            <option value="E">E</option>
                            <option value="J">J</option>
                            <option value="G">G</option>
                        </x-select>
                    </span>
                    
                    <div class="column w-full">
                        <x-text-input class="w-full" wire:model="contribuyenteCreate.cedula" wire:keydown='contribSearch'></x-text-input>
                    </div>
                    
                </div>
                  
                </div>
              </div>
              {{-- Nombre input --}}
              <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                  <span class="w-full mr-2">
                    <x-input-label>
                        Nombre:
                    </x-input-label>

                    <x-text-input class="w-full" wire:model="contribuyenteCreate.nombre"></x-text-input>
                    
                  </span>
                </div>
              </div>
              {{-- Segundo nombre input --}}
              <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                  <span class="w-full mr-2">
                    <x-input-label>
                        Segundo nombre:
                    </x-input-label>

                    <x-text-input class="w-full" wire:model="contribuyenteCreate.nombre2nd"></x-text-input>
                    
                  </span>
                </div>
              </div>
              {{-- Telefono input --}}
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <span class="w-full mr-2">
                    <x-input-label>
                        Telefono:
                    </x-input-label>

                    <x-text-input class="w-full" wire:model="contribuyenteCreate.telefono"></x-text-input>
                    
                </span>
                </div>
              </div>
              {{-- Apellido input --}}
              <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                  <span class="w-full mr-2">
                    <x-input-label>
                        Apellido:
                    </x-input-label>

                    <x-text-input class="w-full" wire:model="contribuyenteCreate.apellido"></x-text-input>
                    
                  </span>
                </div>
              </div>
              {{-- Segundo apellido input --}}
              <div class="w-full max-w-full px-3 shrink-0 md:w-1/4 md:flex-0">
                <div class="mb-4">
                  <span class="w-full mr-2">
                    <x-input-label>
                        Segundo apellido:
                    </x-input-label>

                    <x-text-input class="w-full" wire:model="contribuyenteCreate.apellido2nd"></x-text-input>
                    
                  </span>
                </div>
              </div>
              {{-- Direccion --}}
              <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                <div class="mb-4">
                  <x-input-label>
                    Direccion:
                  </x-input-label>

                  <x-textarea class="w-full" wire:model="contribuyenteCreate.direccion"></x-textarea>
                  <x-input-error-jet for="contribuyenteCreate.direccion" />
                </div>
              </div>

            </div>

            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
            
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-3">Datos del tramite</p>
            {{-- Datos del tramite --}}
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                <div class="mb-4">
                  <label for="address" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                  <input type="text" name="address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                <div class="mb-4">
                  <label for="city" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                  <input type="text" name="city" value="New York" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                <div class="mb-4">
                  <label for="country" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                  <input type="text" name="country" value="United States" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                <div class="mb-4">
                  <label for="postal code" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal code</label>
                  <input type="text" name="postal code" value="437300" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
            </div>

            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">About me</p>
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                <div class="mb-4">
                  <label for="about me" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">About me</label>
                  <input type="text" name="about me" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source." class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <img class="w-full rounded-t-2xl" src="{{ asset('img/user/bg-profile.jpg') }}" alt="profile cover image">
          <div class="flex flex-wrap justify-center -mx-3">
            <div class="w-4/12 max-w-full px-3 flex-0 ">
              <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">
                <a href="javascript:;">
                  <img class="h-auto max-w-full border-2 border-white border-solid rounded-circle" src="{{ asset('/img/user/team-2.jpg') }}" alt="profile image">
                </a>
              </div>
            </div>
          </div>
          <div class="border-black/12.5 rounded-t-2xl p-6 text-center pt-0 pb-6 lg:pt-2 lg:pb-4">
            <div class="flex justify-between">
              <button type="button" class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Connect</button>
              <button type="button" class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                <i class="ni ni-collection text-2.8"></i>
              </button>
              <button type="button" class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Message</button>
              <button type="button" class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                <i class="ni ni-email-83 text-2.8"></i>
              </button>
            </div>
          </div>

          <div class="flex-auto p-6 pt-0">
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 flex-1-0">
                <div class="flex justify-center">
                  <div class="grid text-center">
                    <span class="font-bold dark:text-white text-lg">22</span>
                    <span class="leading-normal dark:text-white text-sm opacity-80">Friends</span>
                  </div>
                  <div class="grid mx-6 text-center">
                    <span class="font-bold dark:text-white text-lg">10</span>
                    <span class="leading-normal dark:text-white text-sm opacity-80">Photos</span>
                  </div>
                  <div class="grid text-center">
                    <span class="font-bold dark:text-white text-lg">89</span>
                    <span class="leading-normal dark:text-white text-sm opacity-80">Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-6 text-center">
              <h5 class="dark:text-white ">
                Mark Davis
                <span class="font-light">, 35</span>
              </h5>
              <div class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                <i class="mr-2 dark:text-white ni ni-pin-3"></i>
                Bucharest, Romania
              </div>
              <div class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                <i class="mr-2 dark:text-white ni ni-briefcase-24"></i>
                Solution Manager - Creative Tim Officer
              </div>
              <div class="dark:text-white/80">
                <i class="mr-2 dark:text-white ni ni-hat-3"></i>
                University of Computer Science
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
  </div>
</div>
