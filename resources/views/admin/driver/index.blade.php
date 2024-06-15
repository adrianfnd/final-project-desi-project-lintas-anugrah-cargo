@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="col-13 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">List Data Driver</p>
                    <p class="card-description">
                        <a href="{{ route('admin.driver.create') }}">
                            <button type="button" class="btn btn-primary btn-icon-text">
                                <i class="bi bi-plus btn-icon-prepend"></i>
                                Tambah Data
                            </button>
                        </a>
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>
                                                <center>Foto Driver</center>
                                            </th>
                                            <th>Nama</th>
                                            <th>Nomor Hp</th>
                                            <th>Nomor Kendaraan</th>
                                            <th>Nama Kendaraan</th>
                                            <th>Alamat</th>
                                            <th>
                                                <center>Aksi</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($drivers as $index => $driver)
                                            <tr>
                                                <td>{{ $drivers->firstItem() + $index }}</td>
                                                <td>
                                                    <center><img
                                                            src="{{ $driver->image ? asset('storage/drivers/' . $driver->image) : 'https://via.placeholder.com/75' }}"
                                                            alt="Foto Driver" class="img-fluid rounded-circle"
                                                            style="object-fit: cover; width: 75px; height: 75px;">
                                                    </center>
                                                </td>
                                                <td>{{ $driver->name }}</td>
                                                <td>{{ $driver->phone_number }}</td>
                                                <td>{{ $driver->license_number }}</td>
                                                <td>{{ $driver->vehicle_name }}</td>
                                                <td>{{ $driver->address }}</td>
                                                <td>
                                                    <center>
                                                        <a href="{{ route('admin.driver.detail', $driver->id) }}">
                                                            <button type="button"
                                                                class="btn btn-inverse-success btn-rounded btn-icon">
                                                                <i class="ti-eye"></i>
                                                            </button>
                                                        </a>
                                                        <a href="{{ route('admin.driver.edit', $driver->id) }}">
                                                            <button type="button"
                                                                class="btn btn-inverse-primary btn-rounded btn-icon">
                                                                <i class="ti-pencil"></i>
                                                            </button>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-inverse-danger btn-rounded btn-icon"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal{{ $driver->id }}">
                                                            <i class="ti-trash"></i>
                                                        </button>
                                                    </center>
                                                </td>
                                            </tr>

                                            <!-- Modal Konfirmasi Hapus -->
                                            <div class="modal fade" id="deleteModal{{ $driver->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus
                                                                Data Driver</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data driver ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <form action="{{ route('admin.driver.destroy', $driver->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    {{ $drivers->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        var successMessage = '{{ session('success') }}';
        var errorMessage = '{{ session('error') }}';
        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: successMessage,
                showConfirmButton: false,
                timer: 2000
            });
        }

        if (errorMessage) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: errorMessage,
                showConfirmButton: false,
                timer: 2000
            });
        }
    </script>
@endsection
