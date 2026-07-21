@props([
    'cart'
])

<div
        popover
        id="order-confirmation"
        class="m-auto max-h-dvh bg-transparent transition duration-200 opacity-0 starting:open:opacity-0 starting:scale-95 open:opacity-100 open:translate-y-0 transition-discrete backdrop:bg-black/50 open:opacity-100 open:backdrop:opacity-100 backdrop:opacity-0 starting:open:backdrop:opacity-0 backdrop:backdrop-blur-sm backdrop:transition-[opacity, display]"
>
    <div class="bg-white p-8 rounded-xl w-120 max-w-full">
        <x-icons.confirmation class="size-12 text-green" />
        <h2 class="mt-4 font-bold text-4xl">Order Confirmed</h2>
        <p class="mt-2">We hope you enjoy your food!</p>

        <div class="bg-rose-50 px-4 mt-8 rounded-xl">
            <ul>
                @foreach($cart->items as $item)
                    <li class="flex justify-between items-center gap-4 border-b border-rose-100 py-4">
                        <div class="flex items-center gap-4">
                            <img
                                    src="{{ Vite::asset("resources/images/" . $item->product->image) }}"
                                    alt="Picture of {{ $item->product->name }}"
                                    class="size-12 rounded-md object-cover"
                            >
                            <div>
                                <h2 class="font-medium">{{ $item->product->name }}</h2>
                                <div class="mt-1 flex gap-2">
                                    <span class="font-medium text-red mr-2">{{ $item->quantity }}x</span>
                                    <span class="text-rose-500">{{ $item->product->formattedPrice() }}</span>
                                </div>
                            </div>
                        </div>

                        <span class="font-medium text-lg text-rose-500">{{ $item->formattedTotal() }}</span>
                    </li>
                @endforeach
            </ul>

            <div class="flex justify-between items-center gap-4 py-6">
                <p>Order Total</p>
                <p class="text-2xl font-bold">{{ $cart->formattedTotal() }}</p>
            </div>
        </div>
    </div>
</div>
