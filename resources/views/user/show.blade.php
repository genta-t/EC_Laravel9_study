<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="md:flex md:justify-around">
                        <div class="md:w-1/2">
                            <x-thumbnail filename="{{ $product->imageFirst->filename ?? '' }}" type="products" />
                        </div>
                        <div class="md:w-1/2 ml-4">
                            <h3 class="mb-4 text-sm title-font text-gray-500 tracking-widest">
                                {{ $product->category->name }}
                            </h3>
                            <h3 class="mb-4 text-gray-900 text-3xl title-font font-medium">{{ $product->name }}</h3>
                            <p class="mb-4 leading-relaxed">{{ $product->information }}</p>
                            <div class="flex items-center mt-4">
                                <div>
                                    <span class="title-font font-medium text-2xl text-gray-900">
                                        {{ number_format($product->price) }}
                                    </span>
                                    <span class="text-sm text-gray-700">円(税込)</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="flex items-center">
                                        <span class="mr-3">数量</span>
                                        <div class="relative">
                                            <select name="quantity"
                                                class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:border-purple-500 text-base pl-3 pr-10">
                                                @for ($i = 1; $i <= $quantity; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="flex ml-auto text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded">カートに入れる</button>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-gray-400 my-8">
                        <div class="mt-8">
                            <div class="mb-4 text-center">
                                この商品を販売しているショップ
                            </div>
                            <div class="mb-4 text-center">
                                {{ $product->shop->name }}
                            </div>
                            <div class="mb-4 text-center">
                                @if ($product->shop->filename !== null)
                                    <img class="mx-auto w-40 h-40 object-cover rounded-full"
                                        src="{{ asset('storage/shops/' . $product->shop->filename) }}">
                                @else
                                    <img src="">
                                @endif
                            </div>
                            <div class="mb-4 text-center">
                                <button type="button" data-micromodal-trigger="modal-1" href='javascript:;'
                                    class="text-white bg-gray-400 border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded">
                                    ショップの詳細を見る
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- {{ $product->name }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                    <h2 class="text-xl text-gray-700" id="modal-1-title">
                        {{ $product->shop->name }}
                    </h2>
                    <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    <p>
                        {{ $product->shop->information }}
                    </p>
                </main>
                <footer class="modal__footer">
                    <button type="button" class="modal__btn bg-gray-300" data-micromodal-close
                        aria-label="Close this dialog window">閉じる</button>
                </footer>
            </div>
        </div>
    </div>
</x-app-layout>
