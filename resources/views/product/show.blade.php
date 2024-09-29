<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="product-detail">
                    <p>{{ $product->name }}</p>
                    <p>{{ $product->price }}円</p>
                    <hr>
                    <form action="{{ route('cart.add') }}" class="product-form" method="post">
                        @csrf
                        <input type="hidden" name="product-id" value="{{ $product->id }}">
                        <select name="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <button type="submit">カートに入れる</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
