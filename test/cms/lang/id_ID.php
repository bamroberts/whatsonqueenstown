<?php

/**
 * Indonesian (Indonesia) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('id_ID', $lang) && is_array($lang['id_ID'])) {
	$lang['id_ID'] = array_merge($lang['en_US'], $lang['id_ID']);
} else {
	$lang['id_ID'] = $lang['en_US'];
}

$lang['id_ID']['AssetAdmin']['CHOOSEFILE'] = 'Pilih file';
$lang['id_ID']['AssetAdmin']['DELETEDX'] = 'Telah menghapus %s file.%s';
$lang['id_ID']['AssetAdmin']['FILESREADY'] = 'File siap untuk di-upload';
$lang['id_ID']['AssetAdmin']['FOLDERDELETED'] = 'Folder telah dihapus.';
$lang['id_ID']['AssetAdmin']['FOLDERSDELETED'] = 'Folder-folder telah dihapus.';
$lang['id_ID']['AssetAdmin']['MENUTITLE'] = 'File & Gambar';
$lang['id_ID']['AssetAdmin']['MENUTITLE'] = 'File-file & Gambar-gambar';
$lang['id_ID']['AssetAdmin']['MOVEDX'] = 'Telah memindahkan %s file';
$lang['id_ID']['AssetAdmin']['NEWFOLDER'] = 'FolderBaru';
$lang['id_ID']['AssetAdmin']['NOTEMP'] = 'Tidak ada folder sementara untuk upload. Tolong atur upload_tmp_dir pada php.ini.';
$lang['id_ID']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Tidak ada apa-apa untuk di-upload';
$lang['id_ID']['AssetAdmin']['NOWBROKEN'] = 'Halaman ini memiliki link yang rusak:';
$lang['id_ID']['AssetAdmin']['NOWBROKEN2'] = 'Pemilik-pemiliknya telah di-email dan mereka akan perbaiki halaman-halaman itu.';
$lang['id_ID']['AssetAdmin']['SAVEDFILE'] = 'Telah menyimpan file %s';
$lang['id_ID']['AssetAdmin']['SAVEFOLDERNAME'] = 'Simpan nama folder';
$lang['id_ID']['AssetAdmin']['THUMBSDELETED'] = 'Semua thumbnail-thumbnail yang tidak terpakai telah dihapus';
$lang['id_ID']['AssetAdmin']['UPLOAD'] = 'Upload File yang Terdaftar di Bawah';
$lang['id_ID']['AssetAdmin']['UPLOADEDX'] = 'Telah meng-upload %s file';
$lang['id_ID']['AssetAdmin_left.ss']['CREATE'] = 'Buat';
$lang['id_ID']['AssetAdmin_left.ss']['DELETE'] = 'Hapus';
$lang['id_ID']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Hapus folder yang diseleksi';
$lang['id_ID']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Memperbolehkan pergantian urutan dengan cara drag &amp; drop';
$lang['id_ID']['AssetAdmin_left.ss']['FOLDERS'] = 'Folder';
$lang['id_ID']['AssetAdmin_left.ss']['GO'] = 'Maju';
$lang['id_ID']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Pilih folder yang Anda inginkan untuk dihapus lalu klik tombol di bawah ini';
$lang['id_ID']['AssetAdmin_left.ss']['TOREORG'] = 'Untuk mengorganisir ulang folder anda, drag mereka sesuai dengan yang anda inginkan.';
$lang['id_ID']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Harap pilih halaman dari sebelah kiri.';
$lang['id_ID']['AssetAdmin_right.ss']['WELCOME'] = 'Selamat datang di';
$lang['id_ID']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Anda tidak diizinkan untuk meng-upload file ke dalam folder ini.';
$lang['id_ID']['AssetTableField']['CAPTION'] = 'Teks bawah';
$lang['id_ID']['AssetTableField']['CREATED'] = 'Upload pertama';
$lang['id_ID']['AssetTableField']['DIM'] = 'Dimensi';
$lang['id_ID']['AssetTableField']['DIMLIMT'] = 'Batasi Ukuran Pada Jendela Pop-up';
$lang['id_ID']['AssetTableField']['FILENAME'] = 'Nama File';
$lang['id_ID']['AssetTableField']['GALLERYOPTIONS'] = 'Opsi Galeri';
$lang['id_ID']['AssetTableField']['IMAGE'] = 'Gambar';
$lang['id_ID']['AssetTableField']['ISFLASH'] = 'Adalah Sebuah Dokumen Flash';
$lang['id_ID']['AssetTableField']['LASTEDIT'] = 'Perubahan terakhir';
$lang['id_ID']['AssetTableField']['MAIN'] = 'Utama';
$lang['id_ID']['AssetTableField']['NOLINKS'] = 'File belum terhubung dari halaman apapun.';
$lang['id_ID']['AssetTableField']['OWNER'] = 'Pemilik';
$lang['id_ID']['AssetTableField']['PAGESLINKING'] = 'Halaman berikut menghubungkan file ini:';
$lang['id_ID']['AssetTableField']['POPUPHEIGHT'] = 'Tinggi pop-up';
$lang['id_ID']['AssetTableField']['POPUPWIDTH'] = 'Lebar pop-up';
$lang['id_ID']['AssetTableField']['SIZE'] = 'Ukuran';
$lang['id_ID']['AssetTableField.ss']['DELFILE'] = 'Hapus file ini';
$lang['id_ID']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Drag ke folder di sebelah kiri untuk memindahkan file';
$lang['id_ID']['AssetTableField.ss']['EDIT'] = 'Edit aset';
$lang['id_ID']['AssetTableField.ss']['SHOW'] = 'Tampilkan aset';
$lang['id_ID']['AssetTableField']['SWFFILEOPTIONS'] = 'Opsi dokumen SWF';
$lang['id_ID']['AssetTableField']['TITLE'] = 'Judul';
$lang['id_ID']['AssetTableField']['TYPE'] = 'Tipe';
$lang['id_ID']['AssetTableField']['URL'] = 'URL';
$lang['id_ID']['CMSMain']['ACCESS'] = 'Akses ke %s dalam CMS';
$lang['id_ID']['CMSMain']['CANCEL'] = 'Batalkan';
$lang['id_ID']['CMSMain']['CHOOSEREPORT'] = '(Pilih laporan)';
$lang['id_ID']['CMSMain']['COMPARINGV'] = 'Anda membandingkan versi #%d dan #%d';
$lang['id_ID']['CMSMain']['COPYPUBTOSTAGE'] = 'Apakah Anda yakin untu menkopi konten yang dipublikasi kepada situs pentahapan? ';
$lang['id_ID']['CMSMain']['DELETE'] = 'Hapus dari situs draft';
$lang['id_ID']['CMSMain']['DESCREMOVED'] = 'dan %s peranakan-peranakan';
$lang['id_ID']['CMSMain']['EMAIL'] = 'Email';
$lang['id_ID']['CMSMain']['GO'] = 'Maju';
$lang['id_ID']['CMSMain']['MENUTITLE'] = 'Isi Site';
$lang['id_ID']['CMSMain']['MENUTITLE'] = 'Isi Situs';
$lang['id_ID']['CMSMain']['METADESCOPT'] = 'Deskripsi';
$lang['id_ID']['CMSMain']['METAKEYWORDSOPT'] = 'Kata kunci';
$lang['id_ID']['CMSMain']['NEW'] = 'Baru: ';
$lang['id_ID']['CMSMain']['NOCONTENT'] = 'tidak ada konten';
$lang['id_ID']['CMSMain']['NOTHINGASSIGNED'] = 'Anda tidak memiliki apa-apa yang ditugaskan kepada anda';
$lang['id_ID']['CMSMain']['NOWAITINGON'] = 'Anda tidak menunggu siapa-siapa';
$lang['id_ID']['CMSMain']['NOWBROKEN'] = 'Halaman berikut memiliki link yang rusak:';
$lang['id_ID']['CMSMain']['NOWBROKEN2'] = 'Pemilik mereka telah dikirimi email dan mereka akan memperbaikinya.';
$lang['id_ID']['CMSMain']['OK'] = 'OK';
$lang['id_ID']['CMSMain']['PAGEDEL'] = '%d halaman terhapus';
$lang['id_ID']['CMSMain']['PAGENOTEXISTS'] = 'Halaman ini tidak ada';
$lang['id_ID']['CMSMain']['PAGEPUB'] = '%d halaman telah dipublikasi';
$lang['id_ID']['CMSMain']['PAGESDEL'] = '%d halaman terhapus';
$lang['id_ID']['CMSMain']['PAGESPUB'] = '%d halaman telah dipublikasi';
$lang['id_ID']['CMSMain']['PAGETYPEOPT'] = 'Tipe Halaman';
$lang['id_ID']['CMSMain']['PRINT'] = 'Cetak/Print';
$lang['id_ID']['CMSMain']['PUBALLCONFIRM'] = 'Harap publikasikan setiap halaman pada situs, mengkopi tahap konten untuk dapat digunakan secara langsung.';
$lang['id_ID']['CMSMain']['PUBALLFUN'] = 'Kemampuan "Publikasikan Semua"';
$lang['id_ID']['CMSMain']['PUBALLFUN2'] = 'Menekan tombol ini sama saja dengan menekan tombol "publikasikan" pada semua halaman. Ini dikehendaki untuk digunakan setelah adanya pengeditan yang sangat besar dari konten situs, seperti ketika situs pertama kali dibuat.';
$lang['id_ID']['CMSMain']['PUBPAGES'] = 'Selesai: Mempublikasi %d halaman';
$lang['id_ID']['CMSMain']['REMOVED'] = 'Menghapus \'%s\'%s dari situs tayangan langsung';
$lang['id_ID']['CMSMain']['REMOVEDFD'] = 'Pindahkan dari situs draft';
$lang['id_ID']['CMSMain']['REMOVEDPAGE'] = 'Pindahkan \'%s\' dari situs yang dipublikasi';
$lang['id_ID']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Menghapus \'%s\' dari situs draft';
$lang['id_ID']['CMSMain']['REPORT'] = 'Laporan';
$lang['id_ID']['CMSMain']['RESTORED'] = 'Penempatan ulang dari \'%s\' sukses';
$lang['id_ID']['CMSMain']['ROLLBACK'] = 'Putar mundur ke versi ini';
$lang['id_ID']['CMSMain']['ROLLEDBACKPUB'] = 'Putar mundur ke versi yang dipublikasi. Nomor versi yang baru adalah #%d ';
$lang['id_ID']['CMSMain']['ROLLEDBACKVERSION'] = 'Putar mundur ke versi #%d. Nomor versi yang baru adalah #%d ';
$lang['id_ID']['CMSMain']['SAVE'] = 'Simpan';
$lang['id_ID']['CMSMain']['SENTTO'] = 'Kirim ke %s %s untuk persetujuan.';
$lang['id_ID']['CMSMain']['STATUSOPT'] = 'Status';
$lang['id_ID']['CMSMain']['TOTALPAGES'] = 'Total halaman:';
$lang['id_ID']['CMSMain']['VERSIONSNOPAGE'] = 'Tidak dapat mencari halaman #%d';
$lang['id_ID']['CMSMain']['VIEWING'] = 'Anda melihat versi #%d, dibuat %s';
$lang['id_ID']['CMSMain']['VISITRESTORE'] = 'kunjungi restorepage/(ID)';
$lang['id_ID']['CMSMain']['WAITINGON'] = 'Anda menunggu orang lain untuk mengerjakan halaman <b>%d</b>.';
$lang['id_ID']['CMSMain']['WORKTODO'] = 'Anda memiliki pekerjaan yang harus dilakukan pada halaman <b>%d</b>.';
$lang['id_ID']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Tidak dapat menemukan nama tombol';
$lang['id_ID']['CMSMain_dialog.ss']['NOLINKED'] = 'Tidak dapat menemukan window.linkedObject untuk mengirimkan klik balik tombol ke jendela utama';
$lang['id_ID']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Tambahkan ke situs draft dan belum dipublikasikan';
$lang['id_ID']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Tambahkan Kriteria';
$lang['id_ID']['CMSMain_left.ss']['BATCHACTIONS'] = 'Aksi Batch';
$lang['id_ID']['CMSMain_left.ss']['CHANGED'] = 'diubah';
$lang['id_ID']['CMSMain_left.ss']['CLOSEBOX'] = 'klik untuk menutup kotak';
$lang['id_ID']['CMSMain_left.ss']['COMPAREMODE'] = 'Mode membandingkan (klik2 dibawah)';
$lang['id_ID']['CMSMain_left.ss']['CREATE'] = 'Buat';
$lang['id_ID']['CMSMain_left.ss']['DEL'] = 'terhapus';
$lang['id_ID']['CMSMain_left.ss']['DELETECONFIRM'] = 'Hapus teks yang terseleksi';
$lang['id_ID']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Dihapus dari situs draft tetapi masih berada di situs hidup';
$lang['id_ID']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Diedit di situs sampah dan belum dipublikasikan';
$lang['id_ID']['CMSMain_left.ss']['EDITEDSINCE'] = 'Diedit Sejak';
$lang['id_ID']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Bolehkan men-drag &amp; drop menurut keinginan';
$lang['id_ID']['CMSMain_left.ss']['GO'] = 'Maju';
$lang['id_ID']['CMSMain_left.ss']['KEY'] = 'Kunci';
$lang['id_ID']['CMSMain_left.ss']['NEW'] = 'baru';
$lang['id_ID']['CMSMain_left.ss']['OPENBOX'] = 'klik untuk membuka kotak ini';
$lang['id_ID']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Sejarah dari Versi Halaman';
$lang['id_ID']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publikasikan halaman yang diseleksi';
$lang['id_ID']['CMSMain_left.ss']['SEARCH'] = 'Cari';
$lang['id_ID']['CMSMain_left.ss']['SEARCHTITLE'] = 'Pilih sepanjang URL, Judul, Judul Menu, &amp; Konten';
$lang['id_ID']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Pilih halaman yang Anda inginkan untuk diganti &amp; lalu klik aksi:';
$lang['id_ID']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Perlihatkan hanya halaman yang telah diubah';
$lang['id_ID']['CMSMain_left.ss']['SHOWUNPUB'] = 'Perlihatkan versi yang tidak dipublikasikan';
$lang['id_ID']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Isi dan Struktur Situs';
$lang['id_ID']['CMSMain_left.ss']['SITEREPORTS'] = 'Laporan Situs';
$lang['id_ID']['CMSMain_right.ss']['ANYMESSAGE'] = 'Apakah Anda mempunyai pesan dari editor?';
$lang['id_ID']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Hrap pilih halaman dari sebelah kiri';
$lang['id_ID']['CMSMain_right.ss']['LOADING'] = 'Memuat';
$lang['id_ID']['CMSMain_right.ss']['MESSAGE'] = 'Pesan';
$lang['id_ID']['CMSMain_right.ss']['SENDTO'] = 'Kirim ke';
$lang['id_ID']['CMSMain_right.ss']['STATUS'] = 'Status';
$lang['id_ID']['CMSMain_right.ss']['SUBMIT'] = 'Masukkan untuk persetujuan';
$lang['id_ID']['CMSMain_right.ss']['WELCOMETO'] = 'Selamat datang di';
$lang['id_ID']['CMSMain_versions.ss']['AUTHOR'] = 'Pengarang';
$lang['id_ID']['CMSMain_versions.ss']['NOTPUB'] = 'Tidak dipublikasi';
$lang['id_ID']['CMSMain_versions.ss']['PUBR'] = 'Penerbit';
$lang['id_ID']['CMSMain_versions.ss']['UNKNOWN'] = 'Tidak dikenal';
$lang['id_ID']['CMSMain_versions.ss']['WHEN'] = 'Kapan';
$lang['id_ID']['CommentAdmin']['ACCEPT'] = 'Terima';
$lang['id_ID']['CommentAdmin']['APPROVED'] = '%s komen telah diterima.';
$lang['id_ID']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Komentar yang telah Disetujui';
$lang['id_ID']['CommentAdmin']['AUTHOR'] = 'Pemilik';
$lang['id_ID']['CommentAdmin']['COMMENT'] = 'Komentar';
$lang['id_ID']['CommentAdmin']['COMMENTS'] = 'Komentar';
$lang['id_ID']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Komentar yang Menunggu Moderasi';
$lang['id_ID']['CommentAdmin']['DATEPOSTED'] = 'Tanggal Dipublikasikan';
$lang['id_ID']['CommentAdmin']['DELETE'] = 'Hapus';
$lang['id_ID']['CommentAdmin']['DELETEALL'] = 'Hapus Semua';
$lang['id_ID']['CommentAdmin']['DELETED'] = '%s komen telah dihapus.';
$lang['id_ID']['CommentAdmin']['MARKASNOTSPAM'] = 'Tandai bukan sebagai spam';
$lang['id_ID']['CommentAdmin']['MARKEDNOTSPAM'] = '%s komen telah ditandai bukan spam.';
$lang['id_ID']['CommentAdmin']['MARKEDSPAM'] = '%s komen telah ditandai sebagai spam.';
$lang['id_ID']['CommentAdmin']['MENUTITLE'] = 'Komentar';
$lang['id_ID']['CommentAdmin']['MENUTITLE'] = 'Komen-komen';
$lang['id_ID']['CommentAdmin']['NAME'] = 'Nama';
$lang['id_ID']['CommentAdmin']['PAGE'] = 'Halaman';
$lang['id_ID']['CommentAdmin']['SPAM'] = 'Spam';
$lang['id_ID']['CommentAdmin']['SPAMMARKED'] = 'Tandai sebagai spam';
$lang['id_ID']['CommentAdmin_left.ss']['COMMENTS'] = 'Komen-komen';
$lang['id_ID']['CommentAdmin_right.ss']['WELCOME1'] = 'Selamat datang ke';
$lang['id_ID']['CommentAdmin_right.ss']['WELCOME2'] = 'manajemen komentar. Tolong pilih map pada pohon folder di sebelah kiri.';
$lang['id_ID']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Disetujui';
$lang['id_ID']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Menunggu Moderasi';
$lang['id_ID']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Komentar';
$lang['id_ID']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['id_ID']['CommentList.ss']['CREATEDW'] = 'Komentar dibuat kapanpun jika salah satu dari \'aksi alur kerja\' diambil- Publikasi, Batalkan, Ajukan.';
$lang['id_ID']['CommentList.ss']['NOCOM'] = 'Tidak ada komentar pada halaman ini.';
$lang['id_ID']['CommentTableField']['FILTER'] = 'Filter';
$lang['id_ID']['CommentTableField']['SEARCH'] = 'Cari';
$lang['id_ID']['CommentTableField.ss']['APPROVE'] = 'setujui';
$lang['id_ID']['CommentTableField.ss']['APPROVECOMMENT'] = 'Setujui komentar ini';
$lang['id_ID']['CommentTableField.ss']['DELETE'] = 'hapus';
$lang['id_ID']['CommentTableField.ss']['DELETEROW'] = 'Hapus baris ini';
$lang['id_ID']['CommentTableField.ss']['EDIT'] = 'edit';
$lang['id_ID']['CommentTableField.ss']['HAM'] = 'ham';
$lang['id_ID']['CommentTableField.ss']['MARKASSPAM'] = 'Tandai komentar ini sebagai spam';
$lang['id_ID']['CommentTableField.ss']['MARKNOSPAM'] = 'Tandai komentar ini sebagai bukan spam';
$lang['id_ID']['CommentTableField.ss']['NOITEMSFOUND'] = 'Tidak ada barang yang ditemukan';
$lang['id_ID']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['id_ID']['ComplexTableField']['CLOSEPOPUP'] = 'Tutup Popup';
$lang['id_ID']['ComplexTableField']['SUCCESSADD'] = 'Telah menambah %s %s %s';
$lang['id_ID']['ImageEditor.ss']['ACTIONS'] = 'aksi';
$lang['id_ID']['ImageEditor.ss']['ADJUST'] = 'Sesuaikan';
$lang['id_ID']['ImageEditor.ss']['APPLY'] = 'terapkan';
$lang['id_ID']['ImageEditor.ss']['BLUR'] = 'buram';
$lang['id_ID']['ImageEditor.ss']['BRIGHTNESS'] = 'keterangan';
$lang['id_ID']['ImageEditor.ss']['CANCEL'] = 'batalkan';
$lang['id_ID']['ImageEditor.ss']['CONTRAST'] = 'kontras';
$lang['id_ID']['ImageEditor.ss']['CROP'] = 'krop';
$lang['id_ID']['ImageEditor.ss']['CURRENTACTION'] = 'aksi&nbsp;saat ini';
$lang['id_ID']['ImageEditor.ss']['EDITFUNCTIONS'] = 'edit&nbsp;fungsi';
$lang['id_ID']['ImageEditor.ss']['EFFECTS'] = 'efek-efek';
$lang['id_ID']['ImageEditor.ss']['EXIT'] = 'Keluar';
$lang['id_ID']['ImageEditor.ss']['GAMMA'] = 'gamma';
$lang['id_ID']['ImageEditor.ss']['GREYSCALE'] = 'hitam-putih';
$lang['id_ID']['ImageEditor.ss']['HEIGHT'] = 'tinggi';
$lang['id_ID']['ImageEditor.ss']['REDO'] = 'redo';
$lang['id_ID']['ImageEditor.ss']['ROT'] = 'putar';
$lang['id_ID']['ImageEditor.ss']['SAVE'] = 'save&nbsp;image';
$lang['id_ID']['ImageEditor.ss']['SEPIA'] = 'sepia';
$lang['id_ID']['ImageEditor.ss']['UNDO'] = 'undo';
$lang['id_ID']['ImageEditor.ss']['UNTITLED'] = 'Dokumin tanpa Judul';
$lang['id_ID']['ImageEditor.ss']['WIDTH'] = 'lebar';
$lang['id_ID']['LeftAndMain']['CHANGEDURL'] = 'URL terubah ke \'%s\'';
$lang['id_ID']['LeftAndMain']['COMMENTS'] = 'Komentar-komentar';
$lang['id_ID']['LeftAndMain']['FILESIMAGES'] = 'File-file & Gambar-gambar';
$lang['id_ID']['LeftAndMain']['HELP'] = 'Bantuan';
$lang['id_ID']['LeftAndMain']['PAGETYPE'] = 'Tipe halaman:';
$lang['id_ID']['LeftAndMain']['PERMAGAIN'] = 'Anda sudah keluar dari CMS. Jika Anda ingin ingin masuk lagi, masukkan username dan password di bawah ini.';
$lang['id_ID']['LeftAndMain']['PERMALREADY'] = 'Mohon maaf, Anda tidak dapat memasuki bagian CMS tersebut. Jika anda ingin masuk sebagai orang lain, lakukan di bawah ini';
$lang['id_ID']['LeftAndMain']['PERMDEFAULT'] = 'Masukkan alamat email dan kata sandi untuk mengakses CMS.';
$lang['id_ID']['LeftAndMain']['PLEASESAVE'] = 'Mohon Simpan Halaman : Halaman ini tidak dapat di-update karena belum disimpan.';
$lang['id_ID']['LeftAndMain']['REPORTS'] = 'Laporan-laporan';
$lang['id_ID']['LeftAndMain']['REQUESTERROR'] = 'Kesalahan dalam permintaan';
$lang['id_ID']['LeftAndMain']['SAVED'] = 'tersimpan';
$lang['id_ID']['LeftAndMain']['SAVEDUP'] = 'Tersimpan';
$lang['id_ID']['LeftAndMain']['SECURITY'] = 'Sekuriti';
$lang['id_ID']['LeftAndMain']['SITECONTENT'] = 'Isi Situs';
$lang['id_ID']['LeftAndMain']['SITECONTENTLEFT'] = 'Konten Site';
$lang['id_ID']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Ini adalah';
$lang['id_ID']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versi ini sedang berjalan, secara teknik ini adalah percabangan CVS';
$lang['id_ID']['LeftAndMain.ss']['ARCHS'] = 'Situs yang Diarsip';
$lang['id_ID']['LeftAndMain.ss']['DRAFTS'] = 'Situs Draft';
$lang['id_ID']['LeftAndMain.ss']['EDIT'] = 'Edit';
$lang['id_ID']['LeftAndMain.ss']['EDITINCMS'] = 'Edit halaman ini dalam CMS';
$lang['id_ID']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['id_ID']['LeftAndMain.ss']['LOADING'] = 'Memuat...';
$lang['id_ID']['LeftAndMain.ss']['LOGGEDINAS'] = 'Masuk sebagai';
$lang['id_ID']['LeftAndMain.ss']['LOGOUT'] = 'keluar';
$lang['id_ID']['LeftAndMain.ss']['PUBLIS'] = 'Situs yang Dipublikasi';
$lang['id_ID']['LeftAndMain.ss']['REQUIREJS'] = 'CMS ini memerlukan anda untuk membolehkan JavaScript.';
$lang['id_ID']['LeftAndMain.ss']['SSWEB'] = 'Situs Web Silverstripe';
$lang['id_ID']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Tampilkan Halaman pada Situs Draft';
$lang['id_ID']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Tampilkan Halaman pada Situs yang Diterbitkan';
$lang['id_ID']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Pandangan halaman:';
$lang['id_ID']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = '\'%s\' telah sukses diterbitkan';
$lang['id_ID']['LeftAndMain']['STATUSTO'] = 'Status berubah ke \'%s\'';
$lang['id_ID']['LeftAndMain']['TREESITECONTENT'] = 'Konten Site';
$lang['id_ID']['MemberList.ss']['FILTER'] = 'Saring';
$lang['id_ID']['MemberList_PageControls.ss']['DISPLAYING'] = 'Menampilkan';
$lang['id_ID']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'anggota';
$lang['id_ID']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'anggota-anggota';
$lang['id_ID']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'anggota';
$lang['id_ID']['MemberList_PageControls.ss']['OF'] = 'dari';
$lang['id_ID']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'anggota';
$lang['id_ID']['MemberList_PageControls.ss']['TO'] = 'kepada';
$lang['id_ID']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Tampilkan yang pertama';
$lang['id_ID']['MemberList_PageControls.ss']['VIEWLAST'] = 'Tampilkan yang akhir';
$lang['id_ID']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Tampilkan berikutnya';
$lang['id_ID']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Tampilkan sebelumnya';
$lang['id_ID']['MemberList_Table.ss']['EMAIL'] = 'Alamat Email';
$lang['id_ID']['MemberList_Table.ss']['FN'] = 'Nama Depan';
$lang['id_ID']['MemberList_Table.ss']['PASSWD'] = 'Password';
$lang['id_ID']['MemberList_Table.ss']['SN'] = 'Nama Panggilan';
$lang['id_ID']['MemberTableField']['ADD'] = 'Tambah';
$lang['id_ID']['MemberTableField']['ADDEDTOGROUP'] = 'Member yang telah ditambahkan ke dalam grup';
$lang['id_ID']['MemberTableField']['ADDINGFIELD'] = 'Penambahan gagal';
$lang['id_ID']['MemberTableField']['ANYGROUP'] = 'Grup apapun';
$lang['id_ID']['MemberTableField']['ASC'] = 'Urut Naik';
$lang['id_ID']['MemberTableField']['DESC'] = 'Urut Turun';
$lang['id_ID']['MemberTableField']['EMAIL'] = 'Email';
$lang['id_ID']['MemberTableField']['FILTER'] = 'Filter';
$lang['id_ID']['MemberTableField']['FILTERBYGROUP'] = 'Filter berdasarkan grup';
$lang['id_ID']['MemberTableField']['FIRSTNAME'] = 'NamaDepan';
$lang['id_ID']['MemberTableField']['ORDERBY'] = 'Urut berdasarkan';
$lang['id_ID']['MemberTableField']['SEARCH'] = 'Cari';
$lang['id_ID']['MemberTableField.ss']['ADDNEW'] = 'Tambahkan tipe member baru: ';
$lang['id_ID']['MemberTableField.ss']['DELETEMEMBER'] = 'Hapus member ini';
$lang['id_ID']['MemberTableField.ss']['EDITMEMBER'] = 'Edit member ini';
$lang['id_ID']['MemberTableField.ss']['SHOWMEMBER'] = 'Perlihatkan member ini';
$lang['id_ID']['MemberTableField']['SURNAME'] = 'Nama Belakang';
$lang['id_ID']['ModelAdmin']['ADDBUTTON'] = 'Tambah';
$lang['id_ID']['ModelAdmin']['ADDFORM'] = 'Isi formulir ini untuk menambahkan %s ke database.';
$lang['id_ID']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Pilih kolum-kolum hasil...';
$lang['id_ID']['ModelAdmin']['CLEAR_SEARCH'] = 'Hapus Pencarian';
$lang['id_ID']['ModelAdmin']['CREATEBUTTON'] = 'Buat \'%s\'';
$lang['id_ID']['ModelAdmin']['DELETE'] = 'Hapus';
$lang['id_ID']['ModelAdmin']['DELETEDRECORDS'] = 'Telah menghapus %s catatan.';
$lang['id_ID']['ModelAdmin']['FOUNDRESULTS'] = 'Pencarian anda menemukan %s hasil yang cocok';
$lang['id_ID']['ModelAdmin']['GOBACK'] = 'Kembali';
$lang['id_ID']['ModelAdmin']['GOFORWARD'] = 'Maju';
$lang['id_ID']['ModelAdmin']['IMPORT'] = 'Impor dari CSV';
$lang['id_ID']['ModelAdmin']['IMPORTEDRECORDS'] = 'Telah mengimpor %s %s.';
$lang['id_ID']['ModelAdmin']['ITEMNOTFOUND'] = 'Saya tidak bisa menemukan barang tersebut';
$lang['id_ID']['ModelAdmin']['LOADEDFOREDITING'] = '\'%s\' telah diload untuk diedit.';
$lang['id_ID']['ModelAdmin']['NOCSVFILE'] = 'Mohon pilih sebuah file CSV untuk diimpor';
$lang['id_ID']['ModelAdmin']['NOIMPORT'] = 'Tidak ada yang bisa diimpor';
$lang['id_ID']['ModelAdmin']['NORESULTS'] = 'Tidak ada hasil';
$lang['id_ID']['ModelAdmin']['SAVE'] = 'Simpan';
$lang['id_ID']['ModelAdmin']['SEARCHRESULTS'] = 'Hasil Pencarian';
$lang['id_ID']['ModelAdmin']['SELECTALL'] = 'pilih semua';
$lang['id_ID']['ModelAdmin']['SELECTNONE'] = 'tidak pilih';
$lang['id_ID']['ModelAdmin']['UPDATEDRECORDS'] = 'Telah membaharui %s catatan.';
$lang['id_ID']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Kolum-kolum database';
$lang['id_ID']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'Tampilkan Spesifikasi untuk %s';
$lang['id_ID']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Hubungan-hubungan';
$lang['id_ID']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'Spesifikasi untuk %s';
$lang['id_ID']['ModelAdmin_left.ss']['ADDLISTING'] = 'Tambah';
$lang['id_ID']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Impor';
$lang['id_ID']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Cari';
$lang['id_ID']['ModelAdmin_right.ss']['WELCOME1'] = 'Selamat datang ke %s. Mohon pilih salah satu masukan di bagian kiri.';
$lang['id_ID']['PageComment']['Comment'] = 'Komen';
$lang['id_ID']['PageComment']['COMMENTBY'] = 'Komentar dari \'%s\' pada %s';
$lang['id_ID']['PageComment']['IsSpam'] = 'Spam?';
$lang['id_ID']['PageComment']['Name'] = 'Nama Penulis';
$lang['id_ID']['PageComment']['NeedsModeration'] = 'Perlu Dimoderasi?';
$lang['id_ID']['PageComment']['PLURALNAME'] = 'Komen-komen halaman';
$lang['id_ID']['PageComment']['SINGULARNAME'] = 'Komen Halaman';
$lang['id_ID']['PageCommentInterface']['POST'] = 'Posting';
$lang['id_ID']['PageCommentInterface']['SPAMQUESTION'] = 'Pertanyaan pelindung spam: %s';
$lang['id_ID']['PageCommentInterface.ss']['COMMENTS'] = 'Komentar';
$lang['id_ID']['PageCommentInterface.ss']['NEXT'] = 'selanjutnya';
$lang['id_ID']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Halaman ini belum dikomentari.';
$lang['id_ID']['PageCommentInterface.ss']['POSTCOM'] = 'Kirim komentar anda';
$lang['id_ID']['PageCommentInterface.ss']['PREV'] = 'sebelumnya';
$lang['id_ID']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'Feed RSS untuk komentar pada halaman ini';
$lang['id_ID']['PageCommentInterface']['YOURCOMMENT'] = 'Komentar-komentar';
$lang['id_ID']['PageCommentInterface']['YOURNAME'] = 'Nama anda';
$lang['id_ID']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Pertanyaan pelindung spam: %s';
$lang['id_ID']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Komentar Anda telah dikirim dan sedang menunggu moderasi.';
$lang['id_ID']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Pesan yang Anda posting adalah:';
$lang['id_ID']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Spam terdeteksi!!';
$lang['id_ID']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'setujui komentar ini';
$lang['id_ID']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'komentar ini bukanlah spam';
$lang['id_ID']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'komentar ini adalah spam';
$lang['id_ID']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Dikirim oleh';
$lang['id_ID']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'pindahkan komentar ini';
$lang['id_ID']['ReportAdmin']['MENUTITLE'] = 'Laporan-laporan';
$lang['id_ID']['ReportAdmin_left.ss']['REPORTS'] = 'Laporan';
$lang['id_ID']['ReportAdmin_right.ss']['WELCOME1'] = 'Selamat datang ke ';
$lang['id_ID']['ReportAdmin_right.ss']['WELCOME2'] = 'seksi melaporkan. Silahkan memilih laporan spesifik dari sebelah kiri.';
$lang['id_ID']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Laporan';
$lang['id_ID']['SecurityAdmin']['ADDMEMBER'] = 'Tambah Member';
$lang['id_ID']['SecurityAdmin']['EDITPERMISSIONS'] = 'Edit ijin-ijin dan alamat-alamat IP setiap grup';
$lang['id_ID']['SecurityAdmin']['MENUTITLE'] = 'Keamanan';
$lang['id_ID']['SecurityAdmin']['MENUTITLE'] = 'Keamanan';
$lang['id_ID']['SecurityAdmin']['NEWGROUP'] = 'Grup Baru';
$lang['id_ID']['SecurityAdmin']['SAVE'] = 'Simpan';
$lang['id_ID']['SecurityAdmin']['SGROUPS'] = 'Grup keamanan';
$lang['id_ID']['SecurityAdmin_left.ss']['CREATE'] = 'Buat';
$lang['id_ID']['SecurityAdmin_left.ss']['DEL'] = 'Hapus';
$lang['id_ID']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Hapus grup yang diseleksi';
$lang['id_ID']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Memperbolehkan pergantian urutan dengan cara drag &amp; drop';
$lang['id_ID']['SecurityAdmin_left.ss']['GO'] = 'Maju';
$lang['id_ID']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Grup Keamanan';
$lang['id_ID']['SecurityAdmin_left.ss']['SELECT'] = 'Pilih halaman yang Anda inginkan untuk dihapus lalu klik tombol di bawah ini';
$lang['id_ID']['SecurityAdmin_left.ss']['TOREORG'] = 'Untuk mengorganisir ulang situs anda, drag halaman sesuai dengan yang anda inginkan.';
$lang['id_ID']['SecurityAdmin_right.ss']['WELCOME1'] = 'Selamat datang ke ';
$lang['id_ID']['SecurityAdmin_right.ss']['WELCOME2'] = 'seksi administrasi keamanan. Silahkan memilih grup dari sebelah kiri.';
$lang['id_ID']['SideReport']['EMPTYPAGES'] = 'Halaman Kosong';
$lang['id_ID']['SideReport']['LAST2WEEKS'] = 'Halaman diedit pada 2 minggu terakhir';
$lang['id_ID']['SideReport']['REPEMPTY'] = 'Laporan %s kosong';
$lang['id_ID']['SideReport']['TODO'] = 'Akan dikerjakan';
$lang['id_ID']['StaticExporter']['BASEURL'] = 'Base URL';
$lang['id_ID']['StaticExporter']['EXPORTTO'] = 'Ekspor ke folder itu';
$lang['id_ID']['StaticExporter']['FOLDEREXPORT'] = 'Folder untuk eksport ke';
$lang['id_ID']['StaticExporter']['NAME'] = 'Eksporter Statis';
$lang['id_ID']['TableListField_PageControls.ss']['DISPLAYING'] = 'Menampilkan';
$lang['id_ID']['TableListField_PageControls.ss']['OF'] = 'dari';
$lang['id_ID']['TableListField_PageControls.ss']['TO'] = 'ke';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Simak pertama';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWLAST'] = 'Simak terakhir';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Simak berikutnya';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Simak sebelumnya';
$lang['id_ID']['ThumbnailStripField']['NOFLASHFOUND'] = 'Tidak ada file flash ditemukan';
$lang['id_ID']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'Tidak ada file flash ditemukan dalam';
$lang['id_ID']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'Tidak ada gambar ditemukan dalam';
$lang['id_ID']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Tidak ada gambar yang ditemukan';
$lang['id_ID']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Pilih folder atau cari di atas)';
$lang['id_ID']['ViewArchivedEmail.ss']['CANACCESS'] = 'Anda dapat mengakses situs yang telah diarsip pada link ini:';
$lang['id_ID']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Anda telah meminta untuk melihat konten dari situs kami pada tanggal ';
$lang['id_ID']['WaitingOn.ss']['ATO'] = 'ditugaskan kepada';
$lang['id_ID']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Widget yang Tersedia';
$lang['id_ID']['WidgetAreaEditor.ss']['INUSE'] = 'Widget yang saat ini digunakan';
$lang['id_ID']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Tidak ada widget yang tersedia';
$lang['id_ID']['WidgetAreaEditor.ss']['TOADD'] = 'Untuk menambah widget, tarik dari bagian di kiri ke sini.';
$lang['id_ID']['WidgetEditor.ss']['DELETE'] = 'Hapus';