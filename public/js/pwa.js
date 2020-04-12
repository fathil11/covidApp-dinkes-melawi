// const divInstall = document.getElementById('installContainer');
// const but = document.getElementById('installContainer');
const butInstall = document.getElementById('butInstall');
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./service-worker.js');
}
// butInstall.addEventListener('click', () => {
//     console.log('👍', 'butInstall-clicked');
//     const promptEvent = window.deferredPrompt;
//     if (!promptEvent) {
//         // The deferred prompt isn't available.
//         return;
//     }
//     // Show the install prompt.
//     promptEvent.prompt();
//     // Log the result
//     promptEvent.userChoice.then((result) => {
//         console.log('👍', 'userChoice', result);
//         // Reset the deferred prompt variable, since
//         // prompt() can only be called once.
//         window.deferredPrompt = null;
//         // Hide the install button.
//         divInstall.classList.toggle('hidden', true);
//     });
// });
window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent Chrome 67 and earlier from automatically showing the prompt
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    var addBtn = butInstall;
    // Update UI to notify the user they can add to home screen
    addBtn.style.display = 'block';

    addBtn.addEventListener('click', (e) => {
        // hide our user interface that shows our A2HS button
        addBtn.style.display = 'none';
        // Show the prompt
        deferredPrompt.prompt();
        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
            } else {
                console.log('User dismissed the A2HS prompt');
            }
            deferredPrompt = null;
        });
    });
});
window.addEventListener('appinstalled', (event) => {
    console.log('👍', 'appinstalled', event);
});
