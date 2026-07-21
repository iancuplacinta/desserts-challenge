@props([
    'product',
    'cart',
])

@php
    $quantity = $cart?->quantityOf($product) ?? 0;
@endphp

<li>
    <article>
        <p>In cart: {{ $quantity }}</p>
        <img
                @class([
                    'aspect-square object-cover rounded-xl',
                    'border-2 border-red' => $quantity
                ])
                src="{{ Vite::asset('resources/images/' . $product->image) }}"
                alt="Photo of {{ $product->name }}"
        >

        @if ($quantity)
            <div class="bg-red flex items-center justify-center rounded-full py-3 text-white -translate-y-1/2 w-40 mx-auto gap-4 px-3">
                <form action="{{ route('cart.removeOne', $product) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="rounded-full border-2 border-white p-1 group hover:bg-white cursor-pointer">
                        <svg class="size-2.5 text-white group-hover:text-red" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 2"><path fill="currentColor" d="M0 .375h10v1.25H0V.375Z"/></svg>
                    </button>
                </form>
                <span class="flex-1 text-center">{{ $quantity }}</span>
                <form action="{{ route('cart.addOne', $product) }}" method="POST">
                    @csrf

                    <button class="rounded-full border-2 border-white p-1 group hover:bg-white cursor-pointer">
                        <svg class="size-2.5 text-white group-hover:text-red" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 10"><path fill="currentColor" d="M10 4.375H5.625V0h-1.25v4.375H0v1.25h4.375V10h1.25V5.625H10v-1.25Z"/></svg>
                    </button>
                </form>
            </div>
        @else
        <form action="{{ route('cart.addOne', $product) }}" method="POST" class="flex justify-center -translate-y-1/2">
            @csrf

            <button class="bg-white border border-rose-500 rounded-full px-8 py-3 font-medium flex gap-2 items-center hover:border-red hover:text-red cursor-pointer"
                    type="submit"
            >
                <x-icons.add-to-cart /><span>Add to cart</span>
            </button>
        </form>
        @endif

        <p class="mt-4 text-rose-500">{{ $product->category }}</p>
        <h2 class="text-lg font-medium">{{ $product->name }}</h2>
        <p class="text-red font-medium">{{ $product->formattedPrice() }}</p>
    </article>
</li>