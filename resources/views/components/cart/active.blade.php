@props(['cart'])

<div class="flex flex-col gap-8">
    <ul class="mt-2">
        @foreach($cart->items as $item)
            <li class="flex justify-between items-center gap-4 border-b border-rose-100 py-4">
                <div>
                    <h2 class="font-medium">{{ $item->product->name }}</h2>
                    <div class="mt-1 flex gap-2">
                        <span class="font-medium text-red mr-2">{{ $item->quantity }}x</span>
                        <span class="text-rose-500">{{ $item->product->formattedPrice() }}</span>
                        <span class="font-medium text-rose-500">{{ $item->formattedTotal() }}</span>
                    </div>
                </div>
                <button class="border border-rose-400 rounded-full p-0.75">
                    <x-icons.delete class="size-3 text-rose-400 hover:text-red" />
                </button>
            </li>
        @endforeach
    </ul>

    <div class="flex justify-between items-center gap-4">
        <p>Order Total</p>
        <p class="text-2xl font-bold">{{ $cart->formattedTotal() }}</p>
    </div>

    <div class="bg-rose-50 p-4 flex justify-center rounded-lg">
        <x-icons.tree class="text-green size-6" />
        <p>This is a <span class="font-bold">carbon-neutral</span> delivery</p>
    </div>

    <button class="text-white bg-red rounded-full px-6 py-4">Confirm Order</button>
</div>