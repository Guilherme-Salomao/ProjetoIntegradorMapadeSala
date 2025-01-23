<?php ?>


<body>

    <div class="sidebar">
        <a href="#">Inicio</a>
        <a href="#" onclick="toggleSubmenu()">Cadastrar</a>
        <div class="submenu" id="submenu">
            <a href="#">Alunos</a>
            <a href="#">Docentes</a>
        </div>
    </div>

    <script>
        function toggleSubmenu() {
            var submenu = document.getElementById('submenu');
            submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
        }
    </script>

</body>

<?php ?>