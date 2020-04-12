// Service Woorker Init
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./service-worker.js');
}

// Install Button
const butInstall = document.getElementById('butInstall');

// Show Install Prompt
window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent Chrome 67 and earlier from automatically showing the prompt
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    var addBtn = butInstall;
    // Update UI to notify the user they can add to home screen
    addBtn.style.display = 'block';

    addBtn.addEventListener('click', (e) => {
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
    import Swal from 'sweetalert2'
    Swal.fire({
        icon: 'success',
        title: 'Aplikasi berhasil di download.',
        showConfirmButton: false,
        timer: 1500
    })
    // console.log('👍', 'appinstalled', event);
});
