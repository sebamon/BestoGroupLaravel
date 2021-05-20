use empleostics;

INSERT INTO `rubros` (`idRubro`, `descripcion`) VALUES
(1, 'Informatica'),
(2, 'Medicina'),
(3, 'abogacia'),
(4, 'Peluqueria'),
(5, 'Ingenieria'),
(6, 'Plomeria');

INSERT INTO `busquedas` (`idBusqueda`, `idRubro`, `empresa`, `titulo`, `descripcion`) VALUES
(1, 1, 'Ticers', 'Se busca Técnico  ', 'Se busca tecnico para mantenimiento de base de datos'),
(2, 3, 'Lian y asociados', 'Puesto de Abogado Orientado a Comercio', 'Firma busca abogado orientado a leyes comerciales.-'),
(3, 4, 'Stilo', 'Stilo contrata estilistas', 'Se solicitan estilistas (F/M) con experiencia'),
(4, 2, 'Clinicas Moreno', 'Consultorio de pediatria disponible', 'Clinicas Moreno busca pediatras para consultorio de pediatria prenatal'),
(5, 5, 'Exppo', 'Ingeniero Civil experimentado', 'Se busca ingeniero experimentado como consultor de grupo'),
(6, 6, 'Plomeros Para Ud.', 'Plomero Patentado', 'Se busca plomero patentado para empresa de plomeria. ');

INSERT INTO `inscripciones` (`idInscripcion`, `idBusqueda`, `fecha`, `apellido`, `nombre`) VALUES
(3, 4, '2018-04-10', 'Capunta', 'Elsa'),
(4, 3, '2018-04-24', 'Nito del Bosque', 'Elena'),
(5, 1, '2018-04-12', 'Tilla', 'Aitor'),
(6, 2, '2018-03-06', 'Menta', 'Aitor'),
(7, 5, '2018-04-20', 'Bailo', 'Aquiles'),
(8, 6, '2018-04-22', 'Mesa', 'Zoila'),
(9, 1, '2018-03-02', 'Bronca', 'Armando'),
(10, 2, '2018-04-17', 'Pere', 'Gil'),
(11, 3, '2018-03-04', 'Ponte Alegre', 'Ramona'),
(12, 4, '2018-03-06', 'Del Campo', 'Flor'),
(13, 5, '2018-03-14', 'Tupido', 'Hess'),
(14, 6, '2018-03-26', 'Lomata Feliz', 'Jose');
