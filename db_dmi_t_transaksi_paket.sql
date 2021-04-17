create table t_transaksi_paket
(
    id_transaksi_paket bigint auto_increment
        primary key,
    id_registrasi_user bigint not null,
    id_paket           bigint not null
);

INSERT INTO db_dmi.t_transaksi_paket (id_transaksi_paket, id_registrasi_user, id_paket) VALUES (1, 2, 1);
INSERT INTO db_dmi.t_transaksi_paket (id_transaksi_paket, id_registrasi_user, id_paket) VALUES (2, 3, 1);
INSERT INTO db_dmi.t_transaksi_paket (id_transaksi_paket, id_registrasi_user, id_paket) VALUES (3, 4, 1);
INSERT INTO db_dmi.t_transaksi_paket (id_transaksi_paket, id_registrasi_user, id_paket) VALUES (4, 5, 1);
INSERT INTO db_dmi.t_transaksi_paket (id_transaksi_paket, id_registrasi_user, id_paket) VALUES (5, 6, 1);