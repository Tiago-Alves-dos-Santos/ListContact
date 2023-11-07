<div>
    {{-- Be like water. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ __('contacts') }}
        </h2>
    </x-slot>

    <div class="w-full flex justify-end">
        <a href="{{ route('contacts.new') }}" type="button"
            class="text-white capitalize bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4
            focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            {{ __('new') }}
        </a>
    </div>
    <div>
        <h2 wire:click='dialogs'>Contatos</h2>
    </div>
    <x-table>
        <x-slot name="thead">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Numero
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @forelse ($contacts as $value)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $value->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $value->cellphone }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                            x-on:click="$dispatch('show-custom-dialog', {dialogId:'contact-update', componentID: '{{ $this->getId() }}', value: '{{ $value }}' })">Editar</button>
                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                           >Deletar</button>
                    </td>
                </tr>
            @empty
            @endforelse
        </x-slot>
    </x-table>
    <div>
        {{ $contacts->links() }}
    </div>


    <div>
        <h1>Contatos do sistema</h1>
    </div>
    <x-table>
        <x-slot name="thead">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Numero
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @forelse ($user_system as $value)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $value->user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $value->user->cell_phone_number }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @empty
            @endforelse
        </x-slot>
    </x-table>
    <div>
        {{ $user_system->links() }}
    </div>

</div>
@push('script')
    <script type="module"></script>
@endpush
