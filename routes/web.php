<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [\App\Http\Controllers\LandingController::class, 'index']);

Route::get('/tentang', function () {
    return view('tentangsekolah');
});
Route::get('/visi', function () {
    return view('visisekolah');
});
Route::get('/osis', function () {
    return view('tentangosis');
});

Route::get('/infolulus', function () {
    return view('infokelulusan');
});


Auth::routes([
    'register' => false, // Registration Routes...
]);

//tabel
Route::get('/berita/data', [App\Http\Controllers\BeritaController::class, 'anyData'])->name('berita.data');
Route::get('/gallery/data', [App\Http\Controllers\GaleriController::class, 'anyData'])->name('gallery.data');
Route::get('/media/data', [App\Http\Controllers\VideoController::class, 'anyData'])->name('media.data');
Route::get('/tentangsekolah/data', [App\Http\Controllers\AboutschoolController::class, 'anyData'])->name('tentangsekolah.data');
//Route::get('/visidanmisi/data', [App\Http\Controllers\VisionController::class, 'anyData'])->name('visidanmisi.data');
Route::get('/kepala/data', [App\Http\Controllers\KepsekController::class, 'anyData'])->name('kepala.data');
Route::get('/pejabat/data', [App\Http\Controllers\PejabatController::class, 'anyData'])->name('pejabat.data');
Route::get('/jurusan/data', [App\Http\Controllers\PostKompController::class, 'anyData'])->name('jurusan.data');
Route::get('/achievement/data', [App\Http\Controllers\PrestasiController::class, 'anyData'])->name('achievement.data');
Route::get('/sarana/data', [App\Http\Controllers\SarprasController::class, 'anyData'])->name('sarana.data');
Route::get('/gurusekolah/data', [App\Http\Controllers\GuruController::class, 'anyData'])->name('gurusekolah.data');
Route::get('/tenagapendidik/data', [App\Http\Controllers\PendidikController::class, 'anyData'])->name('tenagapendidik.data');
Route::get('/matapelajaran/data', [App\Http\Controllers\MapelController::class, 'anyData'])->name('matapelajaran.data');
Route::get('/siswasekolah/data', [App\Http\Controllers\SiswaController::class, 'anyData'])->name('siswasekolah.data');
Route::get('/infosekolah/data', [App\Http\Controllers\PengumumanController::class, 'anyData'])->name('infosekolah.data');
Route::get('/agendasekolah/data', [App\Http\Controllers\AgendaController::class, 'anyData'])->name('agendasekolah.data');
Route::get('/jadwalmapel/data', [App\Http\Controllers\JadwalpelajaranController::class, 'anyData'])->name('jadwalmapel.data');
Route::get('/jadwalexam/data', [App\Http\Controllers\JadwalujianController::class, 'anyData'])->name('jadwalexam.data');
Route::get('/ekskul/data', [App\Http\Controllers\EkstrakurikulerController::class, 'anyData'])->name('ekskul.data');
Route::get('/tentangosis/data', [App\Http\Controllers\AboutosisController::class, 'anyData'])->name('tentangosis.data');
Route::get('/pengurus/data', [App\Http\Controllers\PengurusosisController::class, 'anyData'])->name('pengurus.data');
Route::get('/kegosis/data', [App\Http\Controllers\KegiatanosisController::class, 'anyData'])->name('kegosis.data');
Route::get('/appschool/data', [App\Http\Controllers\AplikasiController::class, 'anyData'])->name('appschool.data');
Route::get('/infoppdb/data', [App\Http\Controllers\PpdbController::class, 'anyData'])->name('infoppdb.data');
Route::get('/pendapat/data', [App\Http\Controllers\OpiniController::class, 'anyData'])->name('pendapat.data');
Route::get('/graduate/data', [App\Http\Controllers\KelulusanController::class, 'anyData'])->name('graduate.data');
Route::get('/graduate/datawaktu', [App\Http\Controllers\KelulusanController::class, 'datawaktu'])->name('graduate.datawaktu');
Route::get('/infograduate', [App\Http\Controllers\KelulusanController::class, 'infograduate'])->name('graduate.infograduate');
Route::get('/gotakeg/data', [App\Http\Controllers\GotakegiatanController::class, 'anyData'])->name('gotakeg.data');
Route::get('/lapkeuangan/data', [App\Http\Controllers\GotakeuanganController::class, 'anyData'])->name('lapkeuangan.data');
Route::get('/donasi/data', [App\Http\Controllers\GotadonasiController::class, 'anyData'])->name('donasi.data');
Route::get('/infofilm/data', [App\Http\Controllers\FilmController::class, 'anyData'])->name('infofilm.data');
Route::get('/infobuku/data', [App\Http\Controllers\BukuController::class, 'anyData'])->name('infobuku.data');
Route::get('/infosinopsis/data', [App\Http\Controllers\SinopsisController::class, 'anyData'])->name('infosinopsis.data');
Route::get('/infomading/data', [App\Http\Controllers\MadingController::class, 'anyData'])->name('infomading.data');
Route::get('/guestbook/data', [App\Http\Controllers\BukutamuController::class, 'anyData'])->name('guestbook.data');
Route::get('/ujianinfo/data', [App\Http\Controllers\UjianController::class, 'anyData'])->name('ujianinfo.data');

//hapus
Route::post('/berita/hapus/{id}', [App\Http\Controllers\BeritaController::class, 'hapus']);
Route::post('/gallery/hapus/{id}', [App\Http\Controllers\GaleriController::class, 'hapus']);
Route::post('/media/hapus/{id}', [App\Http\Controllers\VideoController::class, 'hapus']);
Route::post('/tentangsekolah/hapus/{id}', [App\Http\Controllers\AboutschoolController::class, 'hapus']);
// Route::post('/visidanmisi/hapus/{id}', [App\Http\Controllers\VisionController::class, 'hapus']);
Route::post('/kepala/hapus/{id}', [App\Http\Controllers\KepsekController::class, 'hapus']);
Route::post('/pejabat/hapus/{id}', [App\Http\Controllers\PejabatController::class, 'hapus']);
Route::post('/jurusan/hapus/{id}', [App\Http\Controllers\PostKompController::class, 'hapus']);
Route::post('/achievement/hapus/{id}', [App\Http\Controllers\PrestasiController::class, 'hapus']);
Route::post('/sarana/hapus/{id}', [App\Http\Controllers\SarprasController::class, 'hapus']);
Route::post('/matapelajaran/hapus/{id}', [App\Http\Controllers\MapelController::class, 'hapus']);
Route::post('/gurusekolah/hapus/{id}', [App\Http\Controllers\GuruController::class, 'hapus']);
Route::post('/tenagapendidik/hapus/{id}', [App\Http\Controllers\PendidikController::class, 'hapus']);
Route::post('/siswasekolah/hapus/{id}', [App\Http\Controllers\SiswaController::class, 'hapus']);
Route::post('/infosekolah/hapus/{id}', [App\Http\Controllers\PengumumanController::class, 'hapus']);
Route::post('/agendasekolah/hapus/{id}', [App\Http\Controllers\AgendaController::class, 'hapus']);
Route::post('/jadwalmapel/hapus/{id}', [App\Http\Controllers\JadwalpelajaranController::class, 'hapus']);
Route::post('/jadwalexam/hapus/{id}', [App\Http\Controllers\JadwalujianController::class, 'hapus']);
Route::post('/ekskul/hapus/{id}', [App\Http\Controllers\EkstrakurikulerController::class, 'hapus']);
Route::post('/tentangosis/hapus/{id}', [App\Http\Controllers\AboutosisController::class, 'hapus']);
Route::post('/pengurus/hapus/{id}', [App\Http\Controllers\PengurusosisController::class, 'hapus']);
Route::post('/kegosis/hapus/{id}', [App\Http\Controllers\KegiatanosisController::class, 'hapus']);
Route::post('/appschool/hapus/{id}', [App\Http\Controllers\AplikasiController::class, 'hapus']);
Route::post('/infoppdb/hapus/{id}', [App\Http\Controllers\PpdbController::class, 'hapus']);
Route::post('/pendapat/hapus/{id}', [App\Http\Controllers\OpiniController::class, 'hapus']);
Route::post('/graduate/hapus/{id}', [App\Http\Controllers\KelulusanController::class, 'hapus']);
Route::post('/gotakeg/hapus/{id}', [App\Http\Controllers\GotakegiatanController::class, 'hapus']);
Route::post('/lapkeuangan/hapus/{id}',  [App\Http\Controllers\GotakeuanganController::class, 'hapus']);
Route::post('/donasi/hapus/{id}',  [App\Http\Controllers\GotadonasiController::class, 'hapus']);
Route::post('/infofilm/hapus/{id}',  [App\Http\Controllers\FilmController::class, 'hapus']);
Route::post('/infobuku/hapus/{id}',  [App\Http\Controllers\BukuController::class, 'hapus']);
Route::post('/infosinopsis/hapus/{id}',  [App\Http\Controllers\SinopsisController::class, 'hapus']);
Route::post('/infomading/hapus/{id}',  [App\Http\Controllers\MadingController::class, 'hapus']);
Route::post('/guestbook/hapus/{id}',  [App\Http\Controllers\BukutamuController::class, 'hapus']);
Route::post('/ujianinfo/hapus/{id}',  [App\Http\Controllers\UjianController::class, 'hapus']);

//tambahfoto
Route::get('/jurusan/tambah/{id}', [App\Http\Controllers\PostKompController::class, 'tambah'])->name('jurusan.tambah');
Route::put('/jurusan/tambah/simpan/{id}', [App\Http\Controllers\PostKompController::class, 'simpan'])->name('jurusan.simpan');

//countdown
Route::get('/graduate/waktu', [App\Http\Controllers\KelulusanController::class, 'waktu'])->name('graduate.waktu');
Route::post('/graduate/simpanwaktu', [App\Http\Controllers\KelulusanController::class, 'simpanwaktu'])->name('graduate.simpanwaktu');
Route::get('/graduate/showwaktu', [App\Http\Controllers\KelulusanController::class, 'showwaktu'])->name('graduate.showwaktu');

//search
Route::post('/graduate/search', [App\Http\Controllers\KelulusanController::class, 'search'])->name('graduate.search');

//resources
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('berita', \App\Http\Controllers\BeritaController::class);
Route::resource('gallery', \App\Http\Controllers\GaleriController::class);
Route::resource('media', \App\Http\Controllers\VideoController::class);
Route::resource('tentangsekolah', \App\Http\Controllers\AboutschoolController::class);
Route::resource('visidanmisi', \App\Http\Controllers\VisionController::class);
Route::resource('kepala', \App\Http\Controllers\KepsekController::class);
Route::resource('pejabat', \App\Http\Controllers\PejabatController::class);
Route::resource('jurusan', \App\Http\Controllers\PostKompController::class);
Route::resource('achievement', \App\Http\Controllers\PrestasiController::class);
Route::resource('sarana', \App\Http\Controllers\SarprasController::class);
Route::resource('matapelajaran', \App\Http\Controllers\MapelController::class);
Route::resource('gurusekolah', \App\Http\Controllers\GuruController::class);
Route::resource('tenagapendidik', \App\Http\Controllers\PendidikController::class);
Route::resource('siswasekolah', \App\Http\Controllers\SiswaController::class);
Route::resource('infosekolah', \App\Http\Controllers\PengumumanController::class);
Route::resource('agendasekolah', \App\Http\Controllers\AgendaController::class);
Route::resource('jadwalmapel', \App\Http\Controllers\JadwalpelajaranController::class);
Route::resource('jadwalexam', \App\Http\Controllers\JadwalujianController::class);
Route::resource('ekskul', \App\Http\Controllers\EkstrakurikulerController::class);
Route::resource('tentangosis', \App\Http\Controllers\AboutosisController::class);
Route::resource('pengurus', \App\Http\Controllers\PengurusosisController::class);
Route::resource('kegosis', \App\Http\Controllers\KegiatanosisController::class);
Route::resource('appschool', \App\Http\Controllers\AplikasiController::class);
Route::resource('infoppdb', \App\Http\Controllers\PpdbController::class);
Route::resource('pendapat', \App\Http\Controllers\OpiniController::class);
Route::resource('graduate', \App\Http\Controllers\KelulusanController::class);
Route::resource('gotakeg', \App\Http\Controllers\GotakegiatanController::class);
Route::resource('lapkeuangan', \App\Http\Controllers\GotakeuanganController::class);
Route::resource('donasi', \App\Http\Controllers\GotadonasiController::class);
Route::resource('infofilm', \App\Http\Controllers\FilmController::class);
Route::resource('infobuku', \App\Http\Controllers\BukuController::class);
Route::resource('infosinopsis', \App\Http\Controllers\SinopsisController::class);
Route::resource('infomading', \App\Http\Controllers\MadingController::class);
Route::resource('guestbook', \App\Http\Controllers\BukutamuController::class);
Route::resource('ujianinfo', \App\Http\Controllers\UjianController::class);