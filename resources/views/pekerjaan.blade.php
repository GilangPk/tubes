@extends('layouts.mainlayout')

@section('isi')   
<div class=" container-fluid  border " style="min-height: 800px" >
    <div class= "d-flex table-responsive mx-auto justify-content-center" style="padding: 100px">
        <div class="row">
            <div class="text-center mb-2">
                <h5>Daftar Pekerjaan</h5>
            </div>
            <div >
                <table class="table table-striped table-bordered table-hover table-sm" style="max-width: 600px">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pria</th>
                            <th scope="col">Wanita</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Polisi</td>
                            <td>13</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Guru</td>
                            <td>15</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Petani</td>
                            <td>10</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
