create table t_user
(
    id           bigint auto_increment
        primary key,
    username     varchar(255) null,
    password     varchar(255) null,
    access_token varchar(255) null
);

INSERT INTO db_dmi.t_user (id, username, password, access_token) VALUES (1, 'admin', '$2y$10$2dJ1r3imFBOWUPTR63lSZeqYE2QUhLCtbCGHrLBgLz17hxIg.S6L.', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEifQ.GX-o9Fq7VKDAxSJh4LjPp8NLYa2OwFt56hJXL_d3Ey0');