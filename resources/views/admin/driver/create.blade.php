@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Data Driver</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="image" class="file-upload-default" id="imageUpload">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" id="imageUploadText">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"
                                        onclick="document.getElementById('imageUpload').click();">Upload</button>
                                </span>
                            </div>
                            <img id="imgPreview" class="img-preview" src="" alt="Image Preview">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nomor HP</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nomor SIM</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Negara</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Indonesia</option>
                                <option>Indonesia</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('admin.driver.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
