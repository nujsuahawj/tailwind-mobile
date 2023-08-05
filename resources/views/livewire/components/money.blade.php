<div wire:poll>

    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>ຈຳນວນ</th>
                    <th>ສະຖານະ</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 35; $i++)
                    <tr>
                        <th>{{ $_no++ }}</th>
                        <td>{{ $_no++ }}</td>
                        <td>ສະຖານະ</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <!-- float right -->
    <div class="flex items-end justify-end fixed bottom-40 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a beer" href="#" target="_blank"
                class="block w-20 h-20 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full"
                    src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg" />
            </a>
        </div>
    </div>
    <div class="flex items-end justify-end fixed bottom-80 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a beer" href="#" target="_blank"
                class="block w-20 h-20 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full"
                    src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg" />
            </a>
        </div>
    </div>

</div>
