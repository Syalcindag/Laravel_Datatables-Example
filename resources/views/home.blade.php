@extends('layouts.app')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Okul Tablosu</h1>
            <a href="{{url('/okul/create')}}" class="btn btn-success">Yeni Kayıt</a>
            <hr>
        <table id="myTable">
            <thead>
                <th>No </th>
                <th>Ad </th>
                <th>Soyad</th>
                <th>Güncelle</th>
                <th>Silme</th>
            </thead>
            <tbody>
                @foreach ($okul as $kayit)
                <tr>
                    <td onclick="alert('{{ $kayit->no }}')">{{ $kayit->no }}</td>  <!--bu kısımda inline js kullandım js dosyasıa taşımam gerekiyor -->
                    <td>{{ $kayit->ad }}</td>
                    <td>{{ $kayit->soyad }}</td>
                    <td><a href="{{route('okul.edit',$kayit->no)}}" class="btn btn-warning">Güncelle</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['okul.destroy', $kayit->no]]) !!}
                        {!! Form::submit('Silme', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>

        </div>
    </div>
</div>
@endsection


    <script>

        $(document).ready(function () {
                $('#myTable').dataTable( {
        "lengthMenu": [[3, 6, 9, -1], [3, 6, 9, "All"]]
    });
            });
    </script>



