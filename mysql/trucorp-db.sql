CREATE TABLE Trucorp.users(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(255) NOT NULL,
`Kantor(Pusat/Cabang)` VARCHAR(50) NOT NULL
);

INSERT INTO Trucorp.users (
`Nama`, `Kantor(Pusat/Cabang)`) VALUES
('Nama1','Pusat'),('Nama2','Cabang'),('Mikhael','Pusat')
