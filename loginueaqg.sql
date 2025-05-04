-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2025 a las 22:39:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginueaqg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bachillerato`
--

CREATE TABLE `bachillerato` (
  `idBa` int(11) NOT NULL,
  `TituloBa` varchar(255) NOT NULL,
  `Parrafo1Ba` text NOT NULL,
  `Parrafo2Ba` text NOT NULL,
  `Parrafo3Ba` text NOT NULL,
  `ImagenBa` varchar(255) NOT NULL,
  `ImagenHorario1Ba` varchar(255) NOT NULL,
  `ImagenHorario2Ba` varchar(255) NOT NULL,
  `ImagenHorario3Ba` varchar(255) NOT NULL,
  `ImagenHorario4Ba` varchar(255) NOT NULL,
  `ImagenHorario5Ba` varchar(255) NOT NULL,
  `ImagenHorario6Ba` varchar(255) NOT NULL,
  `ImagenHorario7Ba` varchar(255) NOT NULL,
  `ImagenHorario8Ba` varchar(255) NOT NULL,
  `ImagenHorario9Ba` varchar(255) NOT NULL,
  `ImagenHorario10Ba` varchar(255) NOT NULL,
  `ImagenHorario11Ba` varchar(255) NOT NULL,
  `ImagenHorario12Ba` varchar(255) NOT NULL,
  `ImagenHorario13Ba` varchar(255) NOT NULL,
  `ImagenHorario14Ba` varchar(255) NOT NULL,
  `ImagenHorario15Ba` varchar(255) NOT NULL,
  `ImagenHorario16Ba` varchar(255) NOT NULL,
  `ImagenHorario17Ba` varchar(255) NOT NULL,
  `ImagenHorario18Ba` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bachillerato`
--

INSERT INTO `bachillerato` (`idBa`, `TituloBa`, `Parrafo1Ba`, `Parrafo2Ba`, `Parrafo3Ba`, `ImagenBa`, `ImagenHorario1Ba`, `ImagenHorario2Ba`, `ImagenHorario3Ba`, `ImagenHorario4Ba`, `ImagenHorario5Ba`, `ImagenHorario6Ba`, `ImagenHorario7Ba`, `ImagenHorario8Ba`, `ImagenHorario9Ba`, `ImagenHorario10Ba`, `ImagenHorario11Ba`, `ImagenHorario12Ba`, `ImagenHorario13Ba`, `ImagenHorario14Ba`, `ImagenHorario15Ba`, `ImagenHorario16Ba`, `ImagenHorario17Ba`, `ImagenHorario18Ba`) VALUES
(1, 'Bachillerato: 1ro, 2do y 3er año', 'El Bachillerato en Ciencias está diseñado para brindar una formación académica sólida en áreas fundamentales como matemáticas, física, química y biología, con un enfoque especial en el pensamiento crítico y la resolución de problemas. Este programa prepara a los estudiantes para continuar estudios superiores en campos como la ingeniería, la medicina, las ciencias naturales y otras carreras universitarias que requieren una base científica sólida. Además, fomenta el desarrollo de habilidades investigativas, el uso de tecnologías y el trabajo colaborativo.', 'Por su parte, el Bachillerato en Servicios Contable ofrece una preparación práctica y teórica orientada al mundo financiero, empresarial y administrativo. Los estudiantes adquieren conocimientos en contabilidad, administración, legislación fiscal y uso de software contable, lo que les permite desenvolverse con eficiencia en el ámbito laboral o continuar estudios en carreras afines como contaduría pública, administración de empresas o economía. Este programa también promueve valores como la ética profesional y la responsabilidad en el manejo de recursos económicos.', 'Ambos bachilleratos ofrecen una formación integral que combina conocimientos académicos con el desarrollo personal y social del estudiante. A través de actividades extracurriculares, orientación vocacional y prácticas supervisadas, se busca que los jóvenes egresen no solo con competencias técnicas, sino también con la capacidad de adaptarse a los cambios del entorno y aportar activamente a su comunidad. La diversidad de enfoques permite a cada estudiante elegir el camino que mejor se alinea con sus intereses y aspiraciones profesionales.', 'img/Bachillerato.jpg', 'img/1ABC.jpg', 'img/1BBC.jpg', 'img/1CBC.jpg', 'img/2ABC.jpg', 'img/2BBC.jpg', 'img/2CBC.jpg', 'img/3ABC.jpg', 'img/3BBC.jpg', 'img/3CBC.jpg', 'img/1ABT.jpg', 'img/1BBT.jpg', 'img/1CBT.jpg', 'img/2ABT.jpg', 'img/2BBT.jpg', 'img/2CBT.jpg', 'img/3ABT.jpg', 'img/3BBT.jpg', 'img/3CBT.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basicae`
--

CREATE TABLE `basicae` (
  `idBE` int(11) NOT NULL,
  `TituloBE` varchar(255) NOT NULL,
  `Parrafo1BE` text NOT NULL,
  `Parrafo2BE` text NOT NULL,
  `Parrafo3BE` text NOT NULL,
  `ImagenBE` varchar(255) NOT NULL,
  `ImagenHorario1BE` varchar(255) NOT NULL,
  `ImagenHorario2BE` varchar(255) NOT NULL,
  `ImagenHorario3BE` varchar(255) NOT NULL,
  `ImagenHorario4BE` varchar(255) NOT NULL,
  `ImagenHorario5BE` varchar(255) NOT NULL,
  `ImagenHorario6BE` varchar(255) NOT NULL,
  `ImagenHorario7BE` varchar(255) NOT NULL,
  `ImagenHorario8BE` varchar(255) NOT NULL,
  `ImagenHorario9BE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `basicae`
--

INSERT INTO `basicae` (`idBE`, `TituloBE`, `Parrafo1BE`, `Parrafo2BE`, `Parrafo3BE`, `ImagenBE`, `ImagenHorario1BE`, `ImagenHorario2BE`, `ImagenHorario3BE`, `ImagenHorario4BE`, `ImagenHorario5BE`, `ImagenHorario6BE`, `ImagenHorario7BE`, `ImagenHorario8BE`, `ImagenHorario9BE`) VALUES
(1, 'BÁSICA ELEMENTAL: 2DO, 3RO Y 4TO DE EGB', 'La Básica Elemental en la Unidad Educativa \"Alfonso Quiñónez George\" abarca los niveles de 2do, 3ro y 4to de Educación General Básica (EGB), proporcionando a los estudiantes una educación integral que fomenta el desarrollo de habilidades fundamentales en lectura, escritura, matemáticas y ciencias.', 'En este ciclo, se fortalece el pensamiento lógico, la creatividad y el trabajo en equipo, promoviendo una formación basada en valores como la responsabilidad, el respeto y la disciplina. Nuestro modelo educativo incorpora estrategias innovadoras que potencian el aprendizaje a través de la exploración, la experimentación y el juego didáctico.', 'Contamos con docentes comprometidos que guían a los estudiantes en su proceso de crecimiento académico y personal, asegurando una base sólida para su formación futura. La institución brinda un ambiente seguro y motivador, donde los niños desarrollan sus capacidades y fortalecen su confianza para los siguientes niveles educativos.', 'img/BasicaElemental.jpg', 'img/2A.jpg', 'img/2B.jpg', 'img/2C.jpg', 'img/3A.jpg', 'img/3B.jpg', 'img/3C.jpg', 'img/4A.jpg', 'img/4B.jpg', 'img/4C.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basicam`
--

CREATE TABLE `basicam` (
  `idBM` int(11) NOT NULL,
  `TituloBM` varchar(255) NOT NULL,
  `Parrafo1BM` text NOT NULL,
  `Parrafo2BM` text NOT NULL,
  `Parrafo3BM` text NOT NULL,
  `ImagenBM` varchar(255) NOT NULL,
  `ImagenHorario1BM` varchar(255) NOT NULL,
  `ImagenHorario2BM` varchar(255) NOT NULL,
  `ImagenHorario3BM` varchar(255) NOT NULL,
  `ImagenHorario4BM` varchar(255) NOT NULL,
  `ImagenHorario5BM` varchar(255) NOT NULL,
  `ImagenHorario6BM` varchar(255) NOT NULL,
  `ImagenHorario7BM` varchar(255) NOT NULL,
  `ImagenHorario8BM` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `basicam`
--

INSERT INTO `basicam` (`idBM`, `TituloBM`, `Parrafo1BM`, `Parrafo2BM`, `Parrafo3BM`, `ImagenBM`, `ImagenHorario1BM`, `ImagenHorario2BM`, `ImagenHorario3BM`, `ImagenHorario4BM`, `ImagenHorario5BM`, `ImagenHorario6BM`, `ImagenHorario7BM`, `ImagenHorario8BM`) VALUES
(1, 'BÁSICA MEDIA: 5TO, 6TO Y 7MO DE EGB', 'La Básica Media en la Unidad Educativa \"Alfonso Quiñónez George\" comprende los niveles de 5to, 6to y 7mo de Educación General Básica (EGB). En esta etapa, los estudiantes fortalecen sus conocimientos en áreas clave como matemáticas, lenguaje, ciencias naturales y estudios sociales, a través de metodologías innovadoras y participativas.', 'Nuestro enfoque pedagógico promueve el desarrollo del pensamiento crítico, la autonomía y el trabajo colaborativo, preparando a los estudiantes para enfrentar nuevos retos académicos. Además, se fomenta el uso de herramientas tecnológicas y recursos didácticos que enriquecen su aprendizaje y estimulan su creatividad.', 'La institución se enfoca en la formación integral de los estudiantes, inculcando valores como el respeto, la responsabilidad y la solidaridad. Con el apoyo de docentes capacitados y un ambiente seguro y motivador, los niños y niñas desarrollan sus habilidades y consolidan su confianza para la educación básica superior.', 'img/BasicaMedia.jpg', 'img/2A.jpg', 'img/2A.jpg', 'img/2A.jpg', 'img/2A.jpg', 'img/2A.jpg', 'img/2A.jpg', 'img/2A.jpg', 'img/2A.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basicas`
--

CREATE TABLE `basicas` (
  `idBS` int(11) NOT NULL,
  `TituloBS` varchar(255) NOT NULL,
  `Parrafo1BS` text NOT NULL,
  `Parrafo2BS` text NOT NULL,
  `Parrafo3BS` text NOT NULL,
  `ImagenBS` varchar(255) NOT NULL,
  `ImagenHorario1BS` varchar(255) NOT NULL,
  `ImagenHorario2BS` varchar(255) NOT NULL,
  `ImagenHorario3BS` varchar(255) NOT NULL,
  `ImagenHorario4BS` varchar(255) NOT NULL,
  `ImagenHorario5BS` varchar(255) NOT NULL,
  `ImagenHorario6BS` varchar(255) NOT NULL,
  `ImagenHorario7BS` varchar(255) NOT NULL,
  `ImagenHorario8BS` varchar(255) NOT NULL,
  `ImagenHorario9BS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `basicas`
--

INSERT INTO `basicas` (`idBS`, `TituloBS`, `Parrafo1BS`, `Parrafo2BS`, `Parrafo3BS`, `ImagenBS`, `ImagenHorario1BS`, `ImagenHorario2BS`, `ImagenHorario3BS`, `ImagenHorario4BS`, `ImagenHorario5BS`, `ImagenHorario6BS`, `ImagenHorario7BS`, `ImagenHorario8BS`, `ImagenHorario9BS`) VALUES
(1, 'Básica Superior: 8vo, 9no y 10mo de EGB', 'Cierra el ciclo de la EGB, para continuar con el Bachillerato General Unificado. Por esta consideración en 8vo, 9no y 10mo años se prepara a los estudiantes en los conocimientos fundamentales para el bachillerato, por cuya razón la exigencia es mayor. En cuanto a la formación académica se buscan los mejores métodos y estrategias para mantener el interés de los estudiantes en cuanto concierne al logro de conocimientos significativos.', 'El proceso de recuperación es continuo y responde a compromiso personal del estudiante por lograr el conocimiento tratado, por ser el último subnivel de la EGB la investigación, experimentación y exposición tiene alto grado de exigencia, como métodos activos de aprendizaje, para despertar en los estudiantes el deseo de ampliar sus conocimientos, hacer de la investigación un hábito y aprender a actuar en público.', 'La formación académica es concordante a la formación en valores y el conocimiento de los saberes ancestrales su práctica es permanente y oportuna a las circunstancias que se van presentando.', 'img/BasicaSuperior.jpg', 'img/8A.jpg', 'img/8B.jpg', 'img/8C.jpg', 'img/9A.jpg', 'img/9B.jpg', 'img/9C.jpg', 'img/10A.jpg', 'img/10B.jpg', 'img/10C.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `idInfo` int(11) NOT NULL,
  `ZonaInfo` varchar(125) NOT NULL,
  `ProvinciaInfo` varchar(125) NOT NULL,
  `CodProInfo` varchar(125) NOT NULL,
  `CantonInfo` varchar(125) NOT NULL,
  `CodCanInfo` varchar(125) NOT NULL,
  `ParroquiaInfo` varchar(125) NOT NULL,
  `CodParroquiaInfo` varchar(125) NOT NULL,
  `CodInsEduInfo` varchar(125) NOT NULL,
  `InsEduInfo` varchar(125) NOT NULL,
  `EscolaridadInfo` varchar(125) NOT NULL,
  `TipEduInfo` varchar(125) NOT NULL,
  `NivelEduInfo` varchar(125) NOT NULL,
  `SostenimientoInfo` varchar(125) NOT NULL,
  `AreaInfo` varchar(125) NOT NULL,
  `RegimenescInfo` varchar(125) NOT NULL,
  `JurisdiccionInfo` varchar(125) NOT NULL,
  `ModalidadInfo` varchar(125) NOT NULL,
  `JornadaInfo` varchar(125) NOT NULL,
  `TenenciaInfo` varchar(125) NOT NULL,
  `AccesoInfo` varchar(125) NOT NULL,
  `DocentesInfo` varchar(125) NOT NULL,
  `EstudiantesInfo` varchar(125) NOT NULL,
  `PadronInfo` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`idInfo`, `ZonaInfo`, `ProvinciaInfo`, `CodProInfo`, `CantonInfo`, `CodCanInfo`, `ParroquiaInfo`, `CodParroquiaInfo`, `CodInsEduInfo`, `InsEduInfo`, `EscolaridadInfo`, `TipEduInfo`, `NivelEduInfo`, `SostenimientoInfo`, `AreaInfo`, `RegimenescInfo`, `JurisdiccionInfo`, `ModalidadInfo`, `JornadaInfo`, `TenenciaInfo`, `AccesoInfo`, `DocentesInfo`, `EstudiantesInfo`, `PadronInfo`) VALUES
(1, 'Zona 1', 'Esmeraldas', '08', 'Esmeraldas', '0801', 'Simón Plata Torres', '080105', '08H00369', 'UNIDAD EDUCATIVA ALFONSO QUIÑONEZ GEORGE', 'Escolarizada', 'Educación Regular', 'Inicial, Preparatoria, Básica Elemental, Básica Media, Bachillerato', 'Fiscal', 'Urbana', 'Costa', 'Intercultural', 'Presencial', 'Matutina y Vespertina', 'Propio', 'Terrestre', '56 mujeres / 10 varones, con un total de 66 docentes', '774 mujeres / 753 varones, con un total de 1527 estudiantes', '2024 - 2025');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicial`
--

CREATE TABLE `inicial` (
  `idInicial` int(11) NOT NULL,
  `TituloInicial` varchar(255) NOT NULL,
  `Parrafo1Inicial` text NOT NULL,
  `Parrafo2Inicial` text NOT NULL,
  `Parrafo3Inicial` text NOT NULL,
  `ImagenInicial` varchar(255) NOT NULL,
  `ImagenHorario1Inicial` varchar(255) NOT NULL,
  `ImagenHorario2Inicial` varchar(255) NOT NULL,
  `ImagenHorario3Inicial` varchar(255) NOT NULL,
  `ImagenHorario4Inicial` varchar(255) NOT NULL,
  `ImagenHorario5Inicial` varchar(255) NOT NULL,
  `ImagenHorario6Inicial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inicial`
--

INSERT INTO `inicial` (`idInicial`, `TituloInicial`, `Parrafo1Inicial`, `Parrafo2Inicial`, `Parrafo3Inicial`, `ImagenInicial`, `ImagenHorario1Inicial`, `ImagenHorario2Inicial`, `ImagenHorario3Inicial`, `ImagenHorario4Inicial`, `ImagenHorario5Inicial`, `ImagenHorario6Inicial`) VALUES
(1, 'INICIAL: 1º Y 2º', 'La Educación Inicial es el proceso de acompañamiento al desarrollo integral de niños menores de 5 años, y tiene como objetivo potenciar su aprendizaje y promover su bienestar mediante experiencias significativas y oportunas que se dan en ambientes estimulantes, saludables y seguros. Se marca como fin garantizar y respetar los derechos de la niñez, así como la diversidad cultural y lingüística, el ritmo propio de crecimiento y de aprendizaje, y potenciar sus capacidades, habilidades y destrezas.', 'El nivel Inicial se divide en 2 subniveles:\r\n\r\n- Inicial (Sub-nivel 1), que corresponde a 1º de Inicial y preferentemente se ofrece a los estudiantes de 3 años de edad.\r\n- Inicial (Sub-nivel 2), que corresponde a 2º de Inicial. y preferentemente se ofrece a los estudiantes de 4 años de edad.', 'Los niños de esta edad, de manera natural, buscan explorar, experimentar, jugar y crear, actividades que llevan a cabo por medio de la interacción con los otros, con la naturaleza y con su cultura. Los padres y las madres, los familiares y otras personas de su entorno son muy importantes y deben darles cuidado, protección y afecto para garantizar la formación de niños felices y saludables, capaces de aprender y desarrollarse.', 'img/Inicial.jpg', 'img/Inicial1.jpg', 'img/Inicial2.jpg', 'img/Inicial3.jpg', 'img/Inicial4.jpg', 'img/Inicial5.jpg', 'img/Inicial6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia1`
--

CREATE TABLE `noticia1` (
  `idN1` int(11) NOT NULL,
  `TituloN1` varchar(255) NOT NULL,
  `Parrafo1N1` text NOT NULL,
  `Parrafo2N1` text NOT NULL,
  `Parrafo3N1` text NOT NULL,
  `ImagenN1` varchar(255) NOT NULL,
  `DescripN1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticia1`
--

INSERT INTO `noticia1` (`idN1`, `TituloN1`, `Parrafo1N1`, `Parrafo2N1`, `Parrafo3N1`, `ImagenN1`, `DescripN1`) VALUES
(1, 'ACTO DE INCORPORACIÓN A LOS BACHILLERES AÑO LECTIVO 2024-2025', 'El Acto de Incorporación a los Bachilleres del año lectivo 2024-2025 de la Unidad Educativa Alfonso Quiñónez George de Esmeraldas representa un hito significativo en la vida académica de los estudiantes. Este evento no solo simboliza la culminación de años de esfuerzo y dedicación, sino también el comienzo de nuevas metas y desafíos. Los jóvenes que hoy se incorporan al nivel de Bachillerato se preparan para enfrentar un futuro lleno de oportunidades, con la formación integral que esta institución les ha brindado, basada en principios de excelencia, respeto y responsabilidad.', 'A lo largo de su trayectoria en la Unidad Educativa Alfonso Quiñónez George, los estudiantes han recibido una educación que va más allá del aula, cultivando valores que los acompañarán a lo largo de su vida. El compromiso de la institución con la formación académica y humana de cada uno de sus estudiantes se refleja en la dedicación de los docentes y el esfuerzo de la comunidad educativa para garantizar un ambiente propicio para el aprendizaje. Este acto es una muestra del éxito alcanzado por los estudiantes, quienes han superado retos y han demostrado su capacidad para seguir avanzando en su formación.', 'El acto de incorporación también destaca el trabajo en conjunto entre estudiantes, padres de familia y educadores, quienes han sido pilares fundamentales en el proceso de aprendizaje. Es un momento de celebración, pero también de reflexión, ya que marca el fin de una etapa y el inicio de una nueva, llena de retos y expectativas. La Unidad Educativa Alfonso Quiñónez George continúa siendo un faro de formación académica en Esmeraldas, guiando a sus estudiantes hacia el éxito en su desarrollo personal y profesional, con la certeza de que están preparados para contribuir positivamente a la sociedad.', 'img/Noticia1.jpg', 'Marca el inicio de una nueva etapa llena de desafíos y oportunidades para todos los estudiantes, quienes con esfuerzo y dedicación se preparan para un futuro brillante.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia2`
--

CREATE TABLE `noticia2` (
  `idN2` int(11) NOT NULL,
  `TituloN2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Parrafo1N2` text NOT NULL,
  `Parrafo2N2` text NOT NULL,
  `Parrafo3N2` text NOT NULL,
  `ImagenN2` varchar(255) NOT NULL,
  `DescripN2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticia2`
--

INSERT INTO `noticia2` (`idN2`, `TituloN2`, `Parrafo1N2`, `Parrafo2N2`, `Parrafo3N2`, `ImagenN2`, `DescripN2`) VALUES
(1, 'FERIA TÉCNICA', 'La Unidad Educativa Alfonso Quiñónez George de Esmeraldas estuvo presente en la Feria Técnica organizada por el Distrito de Educación, donde se presentó la oferta educativa de la carrera de Contabilidad. Este evento fue una excelente oportunidad para mostrar a la comunidad estudiantil las ventajas y oportunidades que ofrece esta especialidad, que prepara a los jóvenes para enfrentar los retos del mundo laboral con sólidos conocimientos en finanzas y gestión empresarial.', 'Durante la feria, la institución destacó la formación integral que reciben los estudiantes en la carrera de Contabilidad, enfocada no solo en los aspectos técnicos, sino también en el desarrollo de valores y habilidades que les permitirán sobresalir en el ámbito profesional. La presencia en este evento permitió que los jóvenes interesados pudieran obtener información directa sobre los programas y la calidad educativa que la Unidad Educativa Alfonso Quiñónez George ofrece.', 'La participación en esta feria reafirma el compromiso de la Unidad Educativa Alfonso Quiñónez George con la educación técnica y profesional, proporcionando a los estudiantes herramientas fundamentales para su futuro. Además, el evento fue una excelente ocasión para fortalecer los lazos con otras instituciones educativas y con la comunidad en general, demostrando el liderazgo de la escuela en la formación de jóvenes preparados para los desafíos del mundo laboral.', 'img/Noticia2.jpg', 'Presente en la feria Técnica organizado por el distrito de Educación Esmeraldas ofertando nuestra carrera de Contabilidad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia3`
--

CREATE TABLE `noticia3` (
  `idN3` int(11) NOT NULL,
  `TituloN3` varchar(255) NOT NULL,
  `Parrafo1N3` text NOT NULL,
  `Parrafo2N3` text NOT NULL,
  `Parrafo3N3` text NOT NULL,
  `ImagenN3` varchar(255) NOT NULL,
  `DescripN3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticia3`
--

INSERT INTO `noticia3` (`idN3`, `TituloN3`, `Parrafo1N3`, `Parrafo2N3`, `Parrafo3N3`, `ImagenN3`, `DescripN3`) VALUES
(1, '26 DE SEPTIEMBRE JURAMENTO A LA BANDERA', 'El 26 de septiembre, la comunidad educativa de la Unidad Educativa Alfonso Quiñónez George se reúne para llevar a cabo el tradicional Juramento a la Bandera y la Proclamación de Abanderados y Escolta, un acto cargado de simbolismo y honor. En esta fecha, los estudiantes seleccionados como abanderados y escoltas asumen su responsabilidad con orgullo y un profundo sentido de compromiso con los ideales patrios, marcando un momento clave en su formación cívica.', 'Este evento no solo destaca la importancia de la Bandera como símbolo de unidad y soberanía, sino que también refuerza los valores de respeto, disciplina y amor por la patria en los jóvenes. Al jurar lealtad a la Bandera, los estudiantes se comprometen a ser portadores de estos valores, contribuyendo al bienestar de la nación desde sus respectivos roles en la sociedad.', 'La proclamación de los Abanderados y Escolta resalta la excelencia y el esfuerzo de aquellos estudiantes que han demostrado ser dignos de tan importante honor. Este acto solemne es un recordatorio de la responsabilidad que recae sobre los futuros líderes del país, quienes, a través de su ejemplo, representan los más altos ideales de honor y patriotismo.', 'img/Noticia3.jpg', 'Un acto solemne que reafirma el compromiso de los estudiantes con los valores patrios y el honor.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preparatoria`
--

CREATE TABLE `preparatoria` (
  `idPrepa` int(11) NOT NULL,
  `TituloPrepa` varchar(255) NOT NULL,
  `Parrafo1Prepa` text NOT NULL,
  `Parrafo2Prepa` text NOT NULL,
  `Parrafo3Prepa` text NOT NULL,
  `ImagenPrepa` varchar(255) NOT NULL,
  `ImagenHorario1Prepa` varchar(255) NOT NULL,
  `ImagenHorario2Prepa` varchar(255) NOT NULL,
  `ImagenHorario3Prepa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preparatoria`
--

INSERT INTO `preparatoria` (`idPrepa`, `TituloPrepa`, `Parrafo1Prepa`, `Parrafo2Prepa`, `Parrafo3Prepa`, `ImagenPrepa`, `ImagenHorario1Prepa`, `ImagenHorario2Prepa`, `ImagenHorario3Prepa`) VALUES
(1, 'PREPARATORIA: 1ER AÑO DE EGB', 'La etapa de Preparatoria en la Unidad Educativa \"Alfonso Quiñónez George\" es un pilar fundamental en la educación inicial de los niños. Nuestro enfoque pedagógico está diseñado para fomentar el desarrollo cognitivo, social y emocional a través de metodologías activas y dinámicas.', 'En este nivel, los estudiantes comienzan su aprendizaje con una base sólida en lectura, escritura y habilidades matemáticas, acompañados por docentes altamente capacitados. Se promueve un ambiente estimulante donde los niños exploran el conocimiento mediante el juego, la creatividad y la interacción con su entorno.', 'Nuestro compromiso es proporcionar a los más pequeños un espacio seguro, afectivo y enriquecedor, donde puedan desarrollar su potencial y prepararse para los siguientes niveles educativos con confianza y entusiasmo.', 'img/Preparatoria.jpg', 'img/PreparatoriaA.jpg', 'img/PreparatoriaB.jpg', 'img/PreparatoriaC.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roladministrador`
--

CREATE TABLE `roladministrador` (
  `idAdmin` int(11) NOT NULL,
  `CedulaAdmin` varchar(10) NOT NULL,
  `NombresAdmin` varchar(25) NOT NULL,
  `ApellidosAdmin` varchar(25) NOT NULL,
  `UsuarioAdmin` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ContrasenaAdmin` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roladministrador`
--

INSERT INTO `roladministrador` (`idAdmin`, `CedulaAdmin`, `NombresAdmin`, `ApellidosAdmin`, `UsuarioAdmin`, `ContrasenaAdmin`) VALUES
(3, '0803458058', 'EVA SAMANTHA', 'CARRERA BONE', 'admin', '$2y$10$8GkvWW2ViRPcYZjbd8kwM.urO.llfQVGQg.qV8C1XM.s6tCToIKOK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE `rolusuario` (
  `idUsu` int(11) NOT NULL,
  `CedulaUsu` varchar(10) NOT NULL,
  `NombresUsu` varchar(25) NOT NULL,
  `ApellidosUsu` varchar(25) NOT NULL,
  `UsuarioUsu` varchar(8) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ContrasenaUsu` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`idUsu`, `CedulaUsu`, `NombresUsu`, `ApellidosUsu`, `UsuarioUsu`, `ContrasenaUsu`) VALUES
(13, '0801112345', 'JAIME DAVID', 'CARRERA BUSTAMANTE', 'jaime', '$2y$10$QfnirVAarvej31V6Xgut3.3JapSbEMjnuYUHUV52URC9enNibWgYy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bachillerato`
--
ALTER TABLE `bachillerato`
  ADD PRIMARY KEY (`idBa`);

--
-- Indices de la tabla `basicae`
--
ALTER TABLE `basicae`
  ADD PRIMARY KEY (`idBE`);

--
-- Indices de la tabla `basicam`
--
ALTER TABLE `basicam`
  ADD PRIMARY KEY (`idBM`);

--
-- Indices de la tabla `basicas`
--
ALTER TABLE `basicas`
  ADD PRIMARY KEY (`idBS`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`idInfo`);

--
-- Indices de la tabla `inicial`
--
ALTER TABLE `inicial`
  ADD PRIMARY KEY (`idInicial`);

--
-- Indices de la tabla `noticia1`
--
ALTER TABLE `noticia1`
  ADD PRIMARY KEY (`idN1`);

--
-- Indices de la tabla `noticia2`
--
ALTER TABLE `noticia2`
  ADD PRIMARY KEY (`idN2`);

--
-- Indices de la tabla `noticia3`
--
ALTER TABLE `noticia3`
  ADD PRIMARY KEY (`idN3`);

--
-- Indices de la tabla `preparatoria`
--
ALTER TABLE `preparatoria`
  ADD PRIMARY KEY (`idPrepa`);

--
-- Indices de la tabla `roladministrador`
--
ALTER TABLE `roladministrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  ADD PRIMARY KEY (`idUsu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bachillerato`
--
ALTER TABLE `bachillerato`
  MODIFY `idBa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `basicae`
--
ALTER TABLE `basicae`
  MODIFY `idBE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `basicam`
--
ALTER TABLE `basicam`
  MODIFY `idBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `basicas`
--
ALTER TABLE `basicas`
  MODIFY `idBS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `info`
--
ALTER TABLE `info`
  MODIFY `idInfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inicial`
--
ALTER TABLE `inicial`
  MODIFY `idInicial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticia1`
--
ALTER TABLE `noticia1`
  MODIFY `idN1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticia2`
--
ALTER TABLE `noticia2`
  MODIFY `idN2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `noticia3`
--
ALTER TABLE `noticia3`
  MODIFY `idN3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `preparatoria`
--
ALTER TABLE `preparatoria`
  MODIFY `idPrepa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roladministrador`
--
ALTER TABLE `roladministrador`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  MODIFY `idUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
