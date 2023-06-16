<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <a href="/admin/banner/create" class="btn btn-primary mb-3">Tambah</a>
            <table class="table">
                <tr>
                    <td>No</td>
                    <td>gambar</td>
                    <td>headline</td>
                    <td>Action</td>
                </tr>
                @foreach ($banner as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img src="/{{$item->gambar}}" width="100px"alt="">
                    </td>
                    <td>{{$item->headline}}

                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="/admin/banner/{{$item->id}}/edit" class="btn btn-success mx-2">Edit</a>
                            <form action="/admin/banner/{{ $item->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"> Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
