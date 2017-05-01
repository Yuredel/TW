# Creacion de la base de datos MYSQL

#### primera aproximación al modelo ER

![Imagen][im1]
~~~~
create database proyecto;
use proyecto;

create table miembros(id_miembro MEDIUMINT NOT NULL AUTO_INCREMENT, nombre text not null, primerApellido text not null, segundoApellido text, categoria enum('catedratico', 'titular', 'becario') not null, director bool , email text not null, password varchar(100) not null, telefono text, url text, departamento text not null, centro text not null, institucion text not null,direccion longtext not null, foto text, activo bool not null, permiso int(1), primary key (id_miembro));

create table proyectosInvestigacion(id_proyecto MEDIUMINT NOT NULL AUTO_INCREMENT, codigo text not null, titulo text not null, descrpcion longtext, fechaInicio date not null, fechaFin date not null, entidadesColaboradoras text, cuantia int(100), responsable text not null, integrantes longtext, url text, primary key(id_proyecto));

create table publicaciones( id_publicacion MEDIUMINT NOT NULL AUTO_INCREMENT, id_proyec MEDIUMINT NOT NULL ,tipo enum('revista',' libro','capitulo','conferencia') not null, doi text not null, titulo text not null, autores longtext not null, fechaPublicacion date, resumen longtext, palabras longtext, url text, id_proyecto int(5), primary key (id_publicacion), foreign key (id_proyec) references proyectosInvestigacion (id_proyecto) on delete cascade);

create table revistas( id_revista  MEDIUMINT NOT NULL AUTO_INCREMENT, id_publicaciones MEDIUMINT NOT NULL, nombre text not null, volumen int(5) not null, paginas int(5) not null, primary key(id_revista), foreign key(id_publicaciones) references publicaciones (id_publicacion) on delete cascade); on update cascade delete restrict

create table libros( id_libro MEDIUMINT NOT NULL AUTO_INCREMENT,id_publicaciones  MEDIUMINT NOT NULL, editorial text not null, editor text not null, isbn int(15) not null, primary key(id_libro), foreign key(id_publicaciones) references publicaciones (id_publicacion) on delete cascade);

create table capitulos( id_capitulo MEDIUMINT NOT NULL AUTO_INCREMENT, id_publicaciones MEDIUMINT NOT NULL, titulo text not null, editorial text not null, editor text not null, primary key(id_capitulo), foreign key(id_publicaciones) references publicaciones (id_publicacion) on delete cascade);
~~~~
### Resultado
![Imagen][im2]

![Imagen][im3]

![Imagen][im4]

![Imagen][im5]

![Imagen][im6]

![Imagen][im7]



[im1]: Imagenes/primerabd.jpg
[im2]: Imagenes/Tmiembros.png
[im3]: Imagenes/tablaproyectoInvestigacion.png

[im4]: Imagenes/publicaiones.png
[im5]: Imagenes/tablarevista.png
[im6]: Imagenes/tablaLibros.png

[im7]: Imagenes/tablaCapitulos.png
