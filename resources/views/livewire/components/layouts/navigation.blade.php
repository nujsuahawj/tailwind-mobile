<div class="bg-white absolute bottom-0 w-full border-t border-gray-200 flex">
    @if (Request::is('/'))
        <a wire:navigate.hover href="{{ route('home') }}"
            class="flex flex-grow items-center justify-center p-2 text-indigo-500 hover:text-indigo-500">
        @else
            <a wire:navigate.hover href="{{ route('home') }}"
                class="flex flex-grow items-center justify-center p-2 text-gray-500 hover:text-indigo-500">
    @endif
    <div class="text-center">
        <span class="block h-8 text-3xl leading-8">
            <i class="mdi mdi-home-circle"></i>
        </span>
        <span class="block text-xs leading-none">ໜ້າຫຼັກ</span>
    </div>
    </a>
    @if (Request::is('money'))
        <a wire:navigate.hover href="{{ route('money') }}"
            class="flex flex-grow items-center justify-center p-2 text-indigo-500 hover:text-indigo-500">
        @else
            <a wire:navigate.hover href="{{ route('money') }}"
                class="flex flex-grow items-center justify-center p-2 text-gray-500 hover:text-indigo-500">
    @endif
    <div class="text-center">
        <span class="block h-8 text-3xl leading-8">
            <i class="mdi mdi-briefcase-variant"></i>
        </span>
        <span class="block text-xs leading-none">ການເງິນ</span>
    </div>
    </a>
    @if (Request::is('product'))
        <a wire:navigate.hover href="{{ route('product') }}"
            class="flex flex-grow items-center justify-center p-2 text-indigo-500 hover:text-indigo-500">
        @else
            <a wire:navigate.hover href="{{ route('product') }}"
                class="flex flex-grow items-center justify-center p-2 text-gray-500 hover:text-indigo-500">
    @endif
    <div class="text-center">
        <span class="block h-8 text-3xl leading-8">
            <i class="mdi mdi-store"></i>
        </span>
        <span class="block text-xs leading-none">ສິນຄ້າ</span>
    </div>
    </a>
    @if (Request::is('report'))
        <a wire:navigate.hover href="{{ route('report') }}"
            class="flex flex-grow items-center justify-center p-2 text-indigo-500 hover:text-indigo-500">
        @else
            <a wire:navigate.hover href="{{ route('report') }}"
                class="flex flex-grow items-center justify-center p-2 text-gray-500 hover:text-indigo-500">
    @endif
    <div class="text-center">
        <span class="block h-8 text-3xl leading-8">
            <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="block text-xs leading-none">ສະຫຼຸບ</span>
    </div>
    </a>
</div>
