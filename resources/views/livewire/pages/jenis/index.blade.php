<div class="page-wrapper">
    <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur rem, minus qui suscipit debitis corporis iste
        magni placeat ex similique repellat exercitationem necessitatibus ratione. Voluptatum labore assumenda ducimus
        sed voluptatibus.
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Jenis undangan</th>
                <th>Jumlah paket</th>
                <th>Jumlah undangan</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>13</td>
                        <td>34</td>
                        <td>
                            <div class="flex gap-1 items-center justify-center">
                                <button class="btn btn-success btn-xs btn-square">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-error btn-xs btn-square">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
