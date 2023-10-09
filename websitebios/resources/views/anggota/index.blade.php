
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}</div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List Anggota</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nim</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                        

                            <tfoot>
                                <tr>
                                <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nim</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if(count($anggotas)>0)
                                @foreach($anggotas as $key=>$anggota)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$anggota->nama}}</td>
                                    <td>{{$anggota->nim}}</td>
                                   
                                    <td>{{$anggota->divisi}}</td>
                                    <td><img src="{{asset('image')}}/{{$anggota->foto}}" width="100"></td>
                                    <!-- <td>@if ($anggota->divisi == '')
                                        <span class="px-3 bg-gradient-danger text-white">
                                            {{$anggota->divisi}}
                                        </span>
                                        @elseif ($anggota->divisi == 'ketua')
                                        <span class="px-3 bg-gradient-warning text-white">
                                            {{ $anggota->divisi}}
                                        </span>
                                        @else
                                        <span class="px-3 bg-gradient-success text-white">
                                            {{$anggota->divisi}}
                                        </span>
                                        
                                        @endif -->
                                        
                                  
                                    <td>
                                    <a href="{{route('anggota.edit',[$anggota->id])}}"><button
                                                class="btn btn-outline-success" aria-hidden="true"
                                                style="font-size:25px"><i class="fa fa-edit"></i></button></a>
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" aria-hidden="true"
                                            style="font-size:25px" data-toggle="modal"
                                            data-target="#exampleModal{{$anggota->id}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$anggota->id}}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{route('anggota.destroy',[$anggota->id])}}"
                                                    method="post">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">

                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>

                                                            <button type="submit"
                                                                class="btn btn-outline-danger">Delete</button>
                                                        </div>
                                                    </div>
                            
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('anggota.show',[$anggota->id])}}"><button
                                                class="btn btn-outline-danger" aria-hidden="true"
                                                style="font-size:25px"><i class="fa fa-street-view"></i></button></a>
                                    </td>
                                    @endforeach
                                @else
                                </tr>
                                <td>Tidak</td>
                                <td>ada</td>
                                <td>anggota</td>
                                <td>yang</td>
                                <td>dapat</td>
                                <td>ditampilkan.</td>
                                <!-- <td>Tidak ada pengaduan yang dapat ditampilkan.</td> -->
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
