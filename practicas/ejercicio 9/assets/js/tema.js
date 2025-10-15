document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const btn = document.getElementById('toggleTema');

    // Leer modo guardado
    const temaGuardado = localStorage.getItem('tema');
    if (temaGuardado === 'claro') activarModoClaro();

    btn.addEventListener('click', () => {
        if (body.classList.contains('bg-dark')) {
            activarModoClaro();
            localStorage.setItem('tema', 'claro');
        } else {
            activarModoOscuro();
            localStorage.setItem('tema', 'oscuro');
        }
    });

    function activarModoClaro() {
        body.classList.remove('bg-dark', 'text-light');
        body.classList.add('bg-light', 'text-dark');
        btn.classList.remove('btn-outline-light');
        btn.classList.add('btn-outline-dark');
        btn.textContent = '🌙 Modo Oscuro';
    }

    function activarModoOscuro() {
        body.classList.remove('bg-light', 'text-dark');
        body.classList.add('bg-dark', 'text-light');
        btn.classList.remove('btn-outline-dark');
        btn.classList.add('btn-outline-light');
        btn.textContent = '☀️ Modo Claro';
    }
});
