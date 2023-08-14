# Aplikasi Pembuatan Wording SuretyBond

Build with [Codeigniter4] and [AdminLTE3] for [PTJIS].

[Codeigniter4]: https://www.codeigniter.com/user_guide/index.html
[AdminLTE3]: https://adminlte.io/docs/3.0/
[PTJIS]: https://ptjis.com/

Harap perhatikan [Server Requirement Codeigniter4](https://www.codeigniter.com/user_guide/intro/requirements.html) dan Required Extension.

## Run di Lokal Komputer

1. Download [AdminLTE Plugins, Fonts](https://drive.google.com/file/d/1zVXp5QAJeWHQMBM0hYUBTRsOO6Py_g1O/view?usp=sharing), dan [Vendor CI4](https://drive.google.com/file/d/185bv0a0YmxEqXbYJusgtymmsAMwpi0e6/view?usp=sharing).
2. Extract `adminlte` dan `fonts` pada folder `public/`.
3. Extract `vendor` pada folder utama.
4. Buat Database MySQL baru dengan nama `suretybond_wording` atau sesuaikan nama Database pada `.env`.

```bash
database.default.database = suretybond_wording
```

5. Jalankan perintah pada terminal untuk migrasi Database.

```bash
php spark migrate
php spark db:seed AllSeeder
```

6. Jalankan perintah pada terminal untuk Running Aplikasi.

```bash
php spark serve
```

7. (Opsional) Buatlah file `.envhosting` untuk menyimpan setting `ENV` yang ada di Server.
