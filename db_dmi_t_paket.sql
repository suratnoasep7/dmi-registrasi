create table t_paket
(
    id_paket bigint auto_increment
        primary key,
    nama     varchar(255) not null,
    biaya    double       not null
);

INSERT INTO db_dmi.t_paket (id_paket, nama, biaya) VALUES (1, 'Hemat', 300000);
INSERT INTO db_dmi.t_paket (id_paket, nama, biaya) VALUES (2, 'Standar', 500000);
INSERT INTO db_dmi.t_paket (id_paket, nama, biaya) VALUES (3, 'Premium', 1200000);