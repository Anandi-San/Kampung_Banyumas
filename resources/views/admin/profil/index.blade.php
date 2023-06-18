<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <form action="/admin/profil/update" method="POST"  enctype="multipart/form-data">
                    @method('PUT')

                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" value="{{ isset($profil) ? $profil->name : old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">cover</label>
                        <input type="file" name="cover" class="form-control @error ('cover') is-invalid @enderror">
                    
                        @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($profil))
                            <img src="/{{$profil->cover}}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" id="summernote" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror">{{ $profil->desc }}</textarea>
                            @error('desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>
