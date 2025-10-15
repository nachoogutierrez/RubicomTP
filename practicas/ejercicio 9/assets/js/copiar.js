document.addEventListener('DOMContentLoaded', () => {
    const copyBtn = document.getElementById('copyBtn');
    const passwordInput = document.getElementById('password');
    const copyMsg = document.getElementById('copyMsg');

    if (copyBtn) {
        copyBtn.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(passwordInput.value);
                copyMsg.textContent = "✅ Contraseña copiada al portapapeles";
            } catch (err) {
                copyMsg.textContent = "❌ No se pudo copiar la contraseña";
            }
        });
    }
});
