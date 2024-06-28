# UAS WEB II TANYAFT

## ANGGOTA
- Zulfa Auliya Akbar (2210817210026)
- Muhammad Qohary Rawidafany (2210817210014)

## Database

### Database tanyaft

- **Table users**: 
  - `id` (Int): User ID
  - `username` (String): User username
  - `password` (String): User password
  - `email` (String): Use Email

  
- **Table pengajuan**: Untuk menyimpan data pada fitur tanyaft
  - `id` (Int): id pengajuan
  - `id_user` (Int): id_user(foreing key dari users tabel) 
  - `nama_lengkap` (String)
  - `nim` (String)
  - `program_studi` (String)
  - `pertanyaan` (String)
  - `berkas_pendukung` (String): berisi path untuk berkas pendukung yang di upload



### Preview
