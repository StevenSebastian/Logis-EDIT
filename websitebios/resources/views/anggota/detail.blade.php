
<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}</div>
    @endif
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

            <div class="card">
                <div class="card-header"><b>Detail Anggota</b></div>

                <div class="card-body">
                    <div class="form-group">
                        Nama Anggota :
                        <b>{{$anggota->nama}}</b><br>
                        NIM : <b>{{$anggota->nim}}</b><br>
                        Divisi : <b>{{$anggota->divisi}}</b><br>
                        Foto : <br><img src="{{asset('image')}}/{{$anggota->foto}}" width="50%">
                    </div>

                    <!-- <div class="form-group">
                        Tanggapan :
                        @if(empty($anggota->tanggapan->tanggapan))
                        <b>Belum ada Tanggapan</b>
                        @else
                        <b>{{ $anggota->tanggapan->tanggapan }}</b>
                        @endif

                        @if(Auth::user()->role != 0)
                        @if(empty($anggota->tanggapan->tanggapan))
                        <div class="form-group">
                            <a href="{{route('tanggapan.show',[$anggota->id])}}">
                                <button class="btn btn-primary">Beri Tanggapan</button>
                            </a>

                        @else
                        <div class="form-group">
                            <a href="{{route('tanggapan.edit',[$anggota->tanggapan->id])}}">
                                <button class="btn btn-primary">Update Tanggapan</button>
                            </a>
                        </div> -->
                        
                        <!-- @if(Auth::user()->role !== 0)
                        //Jika role tidak sama dengan 0, tampil tombol tanggapan
                        @endif -->
                        
                        
                        <!-- <div class="form-group">
                            <a href="{{route('tanggapan.show', [$anggota->id])}}"><button class="btn btn-primary">Beri
                                Tanggapan</i></button</a> 
                            </div>  -->
                            @endif
                            @endif
                        <!-- </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

