<main class="content px-3 py-2">
    <div class="container-fluid" id="admin-kegiatan">
        <div class="mt-3 mb-3">
            <h4>Kelola Kegiatan</h4>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card" id="kelolaKegiatanCard">
                            <div class="card-body">
                                <h5>Kelola Kegiatan Administrasi
                                    <hr>
                                </h5>
                                <!-- Form Input Kegiatan -->
                                <form id="tambahKegiatanForm">
                                    <div class="form-group row mb-3">
                                        <label for="namaKegiatan" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                            Kegiatan:</label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="namaKegiatan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="fotoKegiatan"
                                            class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input type="file" class="form-control" id="fotoKegiatan"
                                                accept="image/*" required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-simpan">Simpan</button>
                                        <button type="button" onclick="resetForm()"
                                            class="btn btn-batal ms-2">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Kegiatan -->
                <table class="table table-bordered" id="kegiatanTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="kegiatanTableBody">
                        <!-- Data kegiatan akan ditampilkan di sini -->
                    </tbody>
                </table>

                <!-- Modal untuk Edit Kegiatan -->
                <div class="modal fade" id="editKegiatanModal" tabindex="-1" aria-labelledby="editKegiatanModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editKegiatanModalLabel">Edit Kegiatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editKegiatanForm">
                                    <input type="hidden" id="editIndex"> <!-- Menyimpan index untuk mengedit -->
                                    <div class="mb-3">
                                        <label for="editNamaKegiatan" class="form-label">Nama Kegiatan</label>
                                        <input type="text" class="form-control" id="editNamaKegiatan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editFotoKegiatan" class="form-label">Foto</label>
                                        <input type="file" class="form-control" id="editFotoKegiatan"
                                            accept="image/*">
                                    </div>
                                    <button type="submit" class="btn btn-edit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@section('kodejs')
    <script>
        // tambah kegiatan
        let kegiatan = [];

        // Fungsi untuk menampilkan tabel kegiatan
        function tampilkanKegiatan() {
            const bodyTable = document.getElementById("kegiatanTableBody");
            bodyTable.innerHTML = "";

            kegiatan.forEach((kegiatanItem, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
      <td>${index + 1}</td>
      <td>${kegiatanItem.nama}</td>
      <td><img src="${kegiatanItem.foto}" alt="Foto ${kegiatanItem.nama}" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
      <td>
        <button class="btn btn-edit btn-sm" data-bs-toggle="modal" data-bs-target="#editKegiatanModal" onclick="isiFormEditKegiatan(${index})">Edit</button>
        <button class="btn btn-hapus btn-sm" onclick="hapusKegiatan(${index})">Hapus</button>
      </td>
    `;
                bodyTable.appendChild(row);
            });
        }

        // Fungsi untuk menambahkan kegiatan
        document.getElementById("tambahKegiatanForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const nama = document.getElementById("namaKegiatan").value;
            const foto = URL.createObjectURL(document.getElementById("fotoKegiatan").files[0]);

            kegiatan.push({
                nama,
                foto
            });
            tampilkanKegiatan();

            this.reset();
            alert("Kegiatan berhasil disimpan!");
        });

        // Fungsi untuk mengisi form edit kegiatan
        function isiFormEditKegiatan(index) {
            const kegiatanItem = kegiatan[index];
            document.getElementById("editIndex").value = index;
            document.getElementById("editNamaKegiatan").value = kegiatanItem.nama;
        }

        // Fungsi untuk mengupdate kegiatan
        document.getElementById("editKegiatanForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const index = document.getElementById("editIndex").value;
            const nama = document.getElementById("editNamaKegiatan").value;
            let foto = kegiatan[index].foto;

            if (document.getElementById("editFotoKegiatan").files[0]) {
                foto = URL.createObjectURL(document.getElementById("editFotoKegiatan").files[0]);
            }

            kegiatan[index] = {
                nama,
                foto
            };
            tampilkanKegiatan();

            this.reset();
            const modal = bootstrap.Modal.getInstance(document.getElementById('editKegiatanModal'));
            modal.hide();
            alert("Kegiatan berhasil diedit!");
        });

        // Fungsi untuk menghapus kegiatan
        function hapusKegiatan(index) {
            if (confirm("Apakah Anda yakin ingin menghapus kegiatan ini?")) {
                kegiatan.splice(index, 1);
                tampilkanKegiatan();
                alert("Kegiatan berhasil dihapus!");
            }
        }

        function resetForm() {
            document.getElementById("tambahKegiatanForm").reset();
        }
    </script>
@endsection