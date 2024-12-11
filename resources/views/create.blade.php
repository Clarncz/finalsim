<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <!-- Full-Screen Background Image -->
    <div class="bg-cover bg-center bg-fixed min-h-screen" 
         style="background-image: url('https://partscloud.com/hs-fs/hubfs/Bestandsmanagement%20und%20Inventory%20Management.jpg?width=2000&name=Bestandsmanagement%20und%20Inventory%20Management.jpg');">
        
        <!-- Content Box with Transparent Background -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-4 bg-white/80 dark:bg-gray-800/80 shadow-xl rounded-lg p-8 w-full max-w-7xl mx-auto">
                
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">Add a New Product</h3>

                    <!-- Form Start -->
                    <form action="{{ route('products.store') }}" method="POST" class="mt-4 space-y-6">
                        @csrf <!-- CSRF protection token -->

                        <!-- Product Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Product Name
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required 
                                   class="mt-1 block w-full border-gray-200 rounded-lg text-sm p-4 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                                   placeholder="Enter Product Name">
                        </div>

                        <!-- Quantity -->
                        <div>
                            <label for="quantity" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Quantity
                            </label>
                            <input type="number" 
                                   id="quantity" 
                                   name="quantity" 
                                   required 
                                   step="0.01" 
                                   min="0" 
                                   class="mt-1 block w-full border-gray-200 rounded-lg text-sm p-4 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                                   placeholder="Enter Quantity">
                        </div>

                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Price
                            </label>
                            <input type="number" 
                                   id="price" 
                                   name="price" 
                                   required 
                                   step="0.01" 
                                   class="mt-1 block w-full border-gray-200 rounded-lg text-sm p-4 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                                   placeholder="Enter Price">
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Description
                            </label>
                            <textarea id="description" 
                                      name="description" 
                                      rows="4" 
                                      class="mt-1 block w-full border-gray-200 rounded-lg text-sm p-4 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                                      placeholder="Enter Description"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-center mt-4">
                            <button type="submit" 
                                    class="py-3 px-6 bg-blue-500 text-white font-medium rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Submit
                            </button>
                        </div>

                    </form>
                    <!-- Form End -->

                </div>

            </div>
        </div>

    </div>
</x-app-layout>
