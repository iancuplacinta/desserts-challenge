@props(['product'])

<li>
    <article>
        <img class="aspect-square object-cover rounded-xl" src="{{ Vite::asset('resources/images/' . $product->image) }}" alt="Photo of {{ $product->name }}">
        <form style="--button-height: 3rem" action="" method="POST" class="flex justify-center -mt-[calc(var(--button-height)/2)]">
            @csrf

            <button class="bg-white border border-rose-500 rounded-full px-8 h-(--button-height) font-medium flex gap-2 items-center hover:border-red hover:text-red"
                    type="submit"
            >
                <x-icons.add-to-cart /><span>Add to cart</span>
            </button>
        </form>

        <p class="mt-4 text-rose-500">{{ $product->category }}</p>
        <h2 class="text-lg font-medium">{{ $product->name }}</h2>
        <p class="text-red font-medium">{{ $product->formattedPrice() }}</p>
    </article>
</li>