
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}</div>
            @endif
            <form action="{{route('anggota.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">Tambah Anggota</div>

                <div class="card-body">
                    <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                    <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <select name="divisi" id="">
                                <option value="">Pilih Divisi</option>
                                <option value="ketua">Ketua</option>
                                <option value="wakilketua">Wakil Ketua</option>
                                <option value="pengawas">Pengawas</option>
                                <option value="sekretaris">Sekretaris</option>
                                <option value="bendahara">Bendahara</option>
                                <option value="acara">Acara</option>
                                <option value="pnd">Publikasi & Dokumentasi</option>
                                <option value="pr">Public Relation</option>
                                <option value="dnp">Development & Project</option>
                                <option value="fg">Fund Gathering</option>
                            </select>
                        </div>
                  


                        
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <button class="btn btn-outline-primary">Tambah</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
