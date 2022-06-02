# aplikasi-web
Terdapat 5 buah table :
1. Table user = username*,password,hakakses
2. Table guru = nip*,nama_guru, jenis_kelamin, alamat, username**
3. Table siswa = nis*, nama_siswa, jenis_kelamin, alamat, kelas, username**
4. Table mata_pelajaran = kode_pelajaran*,nama_pelajaran,nip**
5. Table nilai = id_nilai*,nis**,kode_pelajaran**,nilai

-	3 role user = guru, murid, admin
-	Admin = memasukan data guru dan siswa
-	Guru = memasukan nilai siswa
-	Siswa = melihat data nilainya sendiri
