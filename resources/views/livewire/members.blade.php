<x-slot name='header'>
    <h1 class="font-semibold text-gray-700">Data Members</h1>
</x-slot>

<div class="py-4">
    <div class="mx-w-7 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow:hidden shad-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div class="">
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
<button wire:click="create()" class="bg-indigo-600 hover:bg-indigo-800 text-white px-2 py-2 rounded-md flex ">
                    <svg class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor" class="px-2 mx-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="px-2 ">Tambah Data</span>
                </button>
                <div class="flex items-center justify-end w-full ">
                    <p class="flex items-center mt-4">jumlah halaman: </p>
                    <select wire:model="pag"
                        class=" mx-4  shadow appearance-nonerounded rounded-md  text-gray-700 leading-tight focus:outline-none focus:shadow-outline sm:mt-5  text-sm items-center "
                        id="paginate">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                    <input wire:model="search" type="text"
                        class=" shadow appearance-none border rounded  text-gray-700 leading-tight focus:outline-none focus:shadow-outline sm:mt-5  text-sm"
                        placeholder="search">
                </div>

            @if ($isModal)
@include('livewire.create')
            @endif

<div class="">
                <table class="table w-full table-compact mt-4">
                    <thead>

<tr class="">
                            <th class="border    px-4 py-3 w-20">NOMOR</th>
<th class="border   px-4 py-3 w-100">NAMA</th>
                            <th class="border   px-4 py-3">EMAIL</th>
                            <th class="border   px-4 py-3">NOMOR TELPON</th>
                            <th class="border   px-4 py-3 w-30">STATUS</th>
                            <th class="border   px-4 py-3 w-20">ACTION</th>
</tr>
                        </thead>
                        <tbody>
                            @forelse ($Members as $row)
                            <tr>
                                <td class="border text-sm px-3 py-1">{{ $loop->iteration }}</td>
                                <td class="border text-sm px-3 py-1">{{ $row->name }}</td>
                                <td class="border text-sm px-3 py-1">{{ $row->email }}</td>
                                <td class="border text-sm px-3 py-1">{{ $row->phonnumber }}</td>
                                <td class="border text-sm px-3 py-1">{!! $row->status_label !!}</td>
                                <td class="flex items-center justify-between border text-sm px-3 py-1 ">
                                    <button wire:click="edit({{ $row->id }})" class="text-amber-500 rounded-md">
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
</svg>
                                    </button>
                                    <button wire:click="delete({{ $row->id }})" class="text-red-500">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
</svg>
                                    </button>
                                    </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="border px-4 py-2 text-center bg-gray-500 text-white" colspan="6">Data Masih
                                            Kosong ....!</td>
                                    </tr>

@endforelse
                        </tbody>
                        </table>
                        <p class="mt-4 text-sm text-red-500 ">{{ $Members->links() }}</p>
</div>
        </div>
    </div>
</div>
