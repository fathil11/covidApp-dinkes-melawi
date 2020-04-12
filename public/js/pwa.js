// const divInstall = document.getElementById('installContainer');
const butInstall = document.getElementById('butInstall');
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./service-worker.js');
}
butInstall.addEventListener('click', () => {
    console.log('👍', 'butInstall-clicked');
    const promptEvent = window.deferredPrompt;
    if (!promptEvent) {
        // The deferred prompt isn't available.
        return;
    }
    // Show the install prompt.
    promptEvent.prompt();
    // Log the result
    promptEvent.userChoice.then((result) => {
        console.log('👍', 'userChoice', result);
        // Reset the deferred prompt variable, since
        // prompt() can only be called once.
        window.deferredPrompt = null;
        // Hide the install button.
        divInstall.classList.toggle('hidden', true);
    });
});

window.addEventListener('appinstalled', (event) => {
    console.log('👍', 'appinstalled', event);
});
