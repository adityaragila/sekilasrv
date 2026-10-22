create table portofolio (

    id_portofolio serial primary key,
    id_detail_jasa integer not null,
    gambar varchar(100) not null,

    foreign key (id_detail_jasa)
        references detail_jasa(id_detail_jasa)
);