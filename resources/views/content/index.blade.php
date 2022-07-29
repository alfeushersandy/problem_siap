@extends('layouts.master')
@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="header-primary mb-3">Kumpulan Problem SIAP</h1>
                <p class="subtitle-primary">
                    Berikut adalah kumpulan permasalahan yang dialami AHG terhadap program SIAP
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <button onclick="addForm()" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th width="5%">No</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Narasi</th>
                                <th>Bug</th>
                                <th>Update</th>
                                <th width="15%"><i class="fa fa-cog"></i></th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('content.form')
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            $('.form-input').on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "siap/create",
                    data: $('.form-input').serialize(),
                    success: function(response){
                        console.log(response)
                        $('#modal-form').modal('hide')
                        alert('data saved')
                    },
                    error: function(error){
                        console.log(error)
                        alert('data cant saved')
                    }
                })
            })
        })





        function addForm(){
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Input Problem');
        }
    </script>
@endpush