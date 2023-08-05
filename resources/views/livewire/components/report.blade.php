<div wire:poll>

    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>ເດືອນ</th>
                    <th>ຈຳນວນ</th>
                    <th>ສະຖານະ</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 35; $i++)
                <tr>
                    <th>{{ $_no++ }}</th>
                    <td>{{ $_no++ }}</td>
                    <td>200 000 000</td>
                    <td>ສະຖານະ</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>

</div>
