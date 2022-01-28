 <div class="fixed z-6 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">  
            <div class=" px-4 pt-5 pb-12 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex-shrink-0 flex items-center justify-center w-full rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                  <!-- Heroicon name: outline/exclamation -->
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                  </svg>
                </div>
                <div class=" mt-3 mb-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Tambah Data
                  </h3>
            </div>
        </div>
          <form>

            <div class="">
              <div class="mb-4 mt-8">
                <label for="forname" class="block w-full text-gray-700 text-sm font-bold mb-2">
                  Nama
                </label>
                <input type="text" wire:model='name' class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " id="forname">
                @error('name')
                    <span class="text-red-500">
                      {{ $message }}
                    </span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="foremail" class="block text-gray-700 text-sm font-bold mb-2">
                  email
                </label>
                <input type="text" wire:model='email'class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " id="foremail">
                @error('email')
                    <span class="text-red-500">
                      {{ $message }}
                    </span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="forphonnumber" class="block text-gray-700 text-sm font-bold mb-2">
                  phonnumber
                </label>
                <input type="text" wire:model='phonnumber' class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " id="forphonnumber">
                  @error('phonnumber')
                      <span class="text-red-500">
                        {{ $message }}
                      </span>
                  @enderror
              </div>
              <div class="mb-4">
                <label for="forstatus" class="block text-gray-700 text-sm font-bold mb-2">
                  Status
                </label>
                <select type="text" wire:model="status" id="forstatus" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Pilih</option>
                    <option value="1">pro</option>
                    <option value="0">free</option>
                </select>
                  @error('status')
                      <span class="text-red-500">{{ $message }}</span>
                  @enderror
              </div>
            </div>
            <div class="flex justify-end mx-4 py-4">
              <button wire:click.prevent = "store()" type="button" class="mx-2 bg-indigo-500 hover:bg-indigo-800 text-white px-2 py-2 rounded-md flex ">
              Save
              </button>
              <button wire:click="closeModal()" type="button" class="bg-indigo-500 hover:bg-indigo-800 px-2 py-2 rounded-lg flex ">
                Cancel
                </button>
            </div>
          </form>
          
          </div>
        </div>
    </div>
  </div>
</div> 
 

