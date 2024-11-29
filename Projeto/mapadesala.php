<?php ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac Araçatuba - Gestão</title>
    <link rel="stylesheet" href="mapadesala.css">

</head>

<body>

    <?php
    // Cabecalho da pagina
    include 'global/header.php';
    include 'global/sidebar.php';
    ?>

    <div class="conteudo">
        <div class="filters">
            <div class="filter1">
                <label for="sala">Sala:</label>
                <select id="sala" name="sala">
                    <option value="">Todas</option>
                    <option value="1">LAB1</option>
                    <option value="2">LAB2</option>
                    <option value="3">LAB3</option>
                    <option value="4">LAB4</option>
                </select>
            </div>
            <div class="filter2">
                <label for="docente">Docente:</label>
                <select id="docente" name="docente">
                    <option value="">Todos</option>
                    <option value="1">João</option>
                    <option value="2">Maria</option>
                    <option value="3">Pedro</option>
                    <option value="4">Ana</option>
                </select>
            </div>
            <div class="filter3">
                <label for="curso">Curso:</label>
                <select id="curso" name="curso">
                    <option value="">Todos</option>
                    <option value="1">Informática</option>
                    <option value="2">Administração</option>
                    <option value="3">Enfermagem</option>
                    <option value="4">Contabilidade</option>
                </select>
            </div>
        </div>


        <!-- Tabela de horários -->
        <table>
            <thead>
                <tr>
                    <th class="orange" rowspan="2">LAB</th>
                    <th class="blue" colspan="3">Segunda-Feira</th>
                    <th class="orange" colspan="3">Terça-Feira</th>
                    <th class="blue" colspan="3">Quarta-Feira</th>
                    <th class="orange" colspan="3">Quinta-Feira</th>
                    <th class="blue" colspan="3">Sexta-Feira</th>
                    <th class="orange" colspan="2">Sábado</th>
                </tr>
                <!-- Segunda -->
                <tr>
                    <th class="blue">
                        <div>Manhã</div>
                        <div class="horario">08:00 - 12:00</div>
                    </th>
                    <th class="blue">
                        <div>Tarde</div>
                        <div class="horario">13:30 - 17:30</div>
                    </th>
                    <th class="blue">
                        <div>Noite</div>
                        <div class="horario">19:00 - 22:30</div>
                    </th>
                    <!-- Terça -->
                    <th class="orange">
                        <div>Manhã</div>
                        <div class="horario">08:00 - 12:00</div>
                    </th>
                    <th class="orange">
                        <div>Tarde</div>
                        <div class="horario">13:30 - 17:30</div>
                    </th>
                    <th class="orange">
                        <div>Noite</div>
                        <div class="horario">19:00 - 22:30</div>
                    </th>
                    <!-- Quarta -->
                    <th class="blue">
                        <div>Manhã</div>
                        <div class="horario">08:00 - 12:00</div>
                    </th>
                    <th class="blue">
                        <div>Tarde</div>
                        <div class="horario">13:30 - 17:30</div>
                    </th>
                    <th class="blue">
                        <div>Noite</div>
                        <div class="horario">19:00 - 22:30</div>
                    </th>
                    <!-- Quinta -->
                    <th class="orange">
                        <div>Manhã</div>
                        <div class="horario">08:00 - 12:00</div>
                    </th>
                    <th class="orange">
                        <div>Tarde</div>
                        <div class="horario">13:30 - 17:30</div>
                    </th>
                    <th class="orange">
                        <div>Noite</div>
                        <div class="horario">19:00 - 22:30</div>
                    </th>
                    <!-- Sexta -->
                    <th class="blue">
                        <div>Manhã</div>
                        <div class="horario">08:00 - 12:00</div>
                    </th>
                    <th class="blue">
                        <div>Tarde</div>
                        <div class="horario">13:30 - 17:30</div>
                    </th>
                    <th class="blue">
                        <div>Noite</div>
                        <div class="horario">19:00 - 22:30</div>
                    </th>
                    <!-- Sabado -->
                    <th class="orange">
                        <div>Manhã</div>
                        <div class="horario">08:00 - 12:00</div>
                    </th>
                    <th class="orange">
                        <div>Tarde</div>
                        <div class="horario">13:30 - 17:30</div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Linhas da tabela com campos de input -->
                <tr>
                    <td class="info">
                        <div class="numero">1</div>
                        <div class="texto">Informática 18 alunos</div>
                    </td>
                    <td class="bloco verde"></td>
                    <td class="bloco laranja"></td>
                    <td class="bloco lilas"></td>
                    <td class="bloco rosa"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">2</div>
                        <div class="texto">Informática 20 alunos</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">3</div>
                        <div class="texto">Informática 40 alunos</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">4</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">5</div>
                        <div class="texto">Informatica 35 alnuos</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">6</div>
                        <div class="texto">Hardware 28 alnuos</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">7</div>
                        <div class="texto">Infermagem</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">8</div>
                        <div class="texto">Bem-Estar</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">9</div>
                        <div class="texto">Beleza</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">10</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">11</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">12</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">13</div>
                        <div class="texto">Informática 23 alunos</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">14</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">15</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">16</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">17</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">18</div>
                        <div class="texto">...<div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">19</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="numero">20</div>
                        <div class="texto">...</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="info">
                        <div class="texto">Biblioteca</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="container">
            <div class="bloco verde">
                <p>Legenda 1</p>
            </div>
            <div class="bloco laranja">
                <p>Legenda 2</p>
            </div>
            <div class="bloco lilas">
                <p>Legenda 3</p>
            </div>
            <div class="bloco rosa">
                <p>Legenda 4</p>
            </div>
        </div>
    </div>

</body>

</html>

<?php ?>