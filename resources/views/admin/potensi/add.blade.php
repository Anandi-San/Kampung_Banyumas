<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($potensi))
                <form action="/admin/potensi/{{ $potensi->id }}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/potensi" method="POST">

                @endif

                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" placeholder="Username" value="{{ isset($potensi) ? $potensi->title : old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Icon</label>
                        <input type="text" name="icon" class="form-control @error ('icon') is-invalid @enderror" placeholder="Username" value="{{ isset($potensi) ? $potensi->icon : old('icon') }}">
                        <a href="https://fontawesome.com/icons" target="blank">Klik Untuk Mencari Ikon</a>
                        @error('icon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{isset($potensi) ? $potensi->desc : '' }}</textarea>
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>
