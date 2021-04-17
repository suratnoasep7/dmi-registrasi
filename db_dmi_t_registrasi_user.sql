create table t_registrasi_user
(
    id_registrasi_user bigint auto_increment
        primary key,
    nama               varchar(255)    not null,
    tempat             varchar(255)    not null,
    tanggal_lahir      date            not null,
    jenis_kelamin      enum ('L', 'P') null
);

INSERT INTO db_dmi.t_registrasi_user (id_registrasi_user, nama, tempat, tanggal_lahir, jenis_kelamin) VALUES (1, 'tes', 'tes', '2021-04-17', 'L');
INSERT INTO db_dmi.t_registrasi_user (id_registrasi_user, nama, tempat, tanggal_lahir, jenis_kelamin) VALUES (2, 'tes', 'tes', '1111-11-11', 'L');
INSERT INTO db_dmi.t_registrasi_user (id_registrasi_user, nama, tempat, tanggal_lahir, jenis_kelamin) VALUES (3, 'tes', 'tes', '1111-11-11', 'L');
INSERT INTO db_dmi.t_registrasi_user (id_registrasi_user, nama, tempat, tanggal_lahir, jenis_kelamin) VALUES (4, 'tes', 'tes', '1111-11-11', 'L');
INSERT INTO db_dmi.t_registrasi_user (id_registrasi_user, nama, tempat, tanggal_lahir, jenis_kelamin) VALUES (5, 'tes', 'tes', '1111-11-11', 'L');
INSERT INTO db_dmi.t_registrasi_user (id_registrasi_user, nama, tempat, tanggal_lahir, jenis_kelamin) VALUES (6, 'tes', 'tes', '1111-11-11', 'L');