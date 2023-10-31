<div>
    {{-- Stop trying to control. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ __('new contact') }}
        </h2>
    </x-slot>
    <x-slot name="content">
        <div x-data="{option: 'users_anonymous'}">
            {{-- Button dropdown --}}
            <div class="flex justify-center">
                <div>
                    <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio"
                        class="capitalize text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">{{ __('create by') }} <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHelperRadio"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700 dark:divide-gray-600"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownHelperRadioButton">
                            <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-radio-4" name="helper-radio" type="radio" checked
                                            x-model="option" value="users_anonymous"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-radio-4"
                                            class="font-medium text-gray-900 dark:text-gray-300">
                                            <div class="capitalize"> {{ __('anonymous number') }} </div>
                                            <p id="helper-radio-text-4"
                                                class="first-uppercase text-xs font-normal text-gray-500 dark:text-gray-300">
                                                {{ __('register contact with only number and name') }}
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-radio-5" name="helper-radio" type="radio" x-model="option" value="users_system"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-radio-5"
                                            class="font-medium text-gray-900 dark:text-gray-300">
                                            <div class="capitalize"> {{ __('users of system') }} </div>
                                            <p id="helper-radio-text-5"
                                                class="first-uppercase text-xs font-normal text-gray-500 dark:text-gray-300">
                                                {{ __('create contact from a user already existing in the system') }}
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- End Button dropdown --}}
            <form class="" x-show="option == 'users_anonymous' ">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 md:mr-2">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text"
                            name="name" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="w-full md:w-1/2">
                        <x-input-label class="first-uppercase" for="number" :value="__('number')" />
                        <x-text-input wire:model="number" id="number" class="block mt-1 w-full" type="text"
                            name="number" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('number')" class="mt-2" />
                    </div>
                </div>
                <div class="w-full flex justify-end mt-2">
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        {{ __('Save') }}
                    </button>
                </div>
            </form>

            {{-- Table of users registred --}}
            <div x-show="option == 'users_system'">
                Table
            </div>
        </div>
    </x-slot>
</div>
