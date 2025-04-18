
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(50) NOT NULL,
  `curso_horas` varchar(50) NOT NULL,
  `carga_horaria` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `alunos` (`id`, `nome`, `matricula`, `curso`, `email`, `telefone`, `endereco`, `cep`, `cidade`, `uf`, `curso_horas`, `carga_horaria`) VALUES
(4, 'VINICIUS DOS SANTOS COSTA', '8666', 'ADS', 'vini@gmail.com', '48996080025', 'Rua Brasil', '88130658', 'Sao Jose', 'SC', 'PHP', 65),
(5, 'Sofia dos Santos Costa', '8555', 'ADS', 'sofia@gmail.com', '4896086598', 'Rua Azul', '88135659', 'Plahoca', 'SC', 'PHP', 32);

ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

