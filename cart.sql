DROP table buying;
CREATE table buying(
    id serial not null primary key,
    item_name text not null,
    quantity int not null,
    price text not null
);