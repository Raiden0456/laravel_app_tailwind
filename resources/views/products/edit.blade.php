<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{Form::model($product, array('route' => array('products.update', $product->id)));}}
                        <div class="mt-6 space-y-6">
                            {{Form::label('name', 'Name', array("class"=>"block font-medium text-sm text-gray-700 dark:text-gray-300"));}}
                            {{Form::text('name', null, array("class"=>"border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block "));}}
                        </div>
                        <div class="mt-6 space-y-6">
                            {{Form::label('price', 'Price', array("class"=>"block font-medium text-sm text-gray-700 dark:text-gray-300"));}}
                            {{Form::text('price', null, array("class"=>"border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block "));}}
                        </div>
                        <div class="mt-6 space-y-6">
                            {{Form::submit('Update',array("class"=>"inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"));}}
                        </div>
                    {{Form::close();}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
