document.addEventListener("DOMContentLoaded", function () {
    const audioPlayers = document.querySelectorAll(".audio-player");

    const menuToggle = document.getElementById("toggleJuzOrSurah");
    const menuJuz = document.getElementById("menu-juz");
    const menuSurah = document.getElementById("menu-surah");
    menuToggle.addEventListener("change", function () {
        if (menuToggle.checked) {
            menuJuz.classList.add("hidden");
            menuSurah.classList.remove("hidden");
        } else {
            menuJuz.classList.remove("hidden");
            menuSurah.classList.add("hidden");
        }
    });

    const toggleCheckbox = document.getElementById("toggleJuzOrSurah");
    const currentURL = window.location.pathname; // Ambil URL saat ini

    // Cek apakah URL adalah /surah atau /surah/{nomorSurah}
    if (currentURL.startsWith("/quran/surah")) {
        toggleCheckbox.checked = true; // Aktifkan checkbox
        menuJuz.classList.add("hidden");
        menuSurah.classList.remove("hidden");
    } else {
        toggleCheckbox.checked = false; // Nonaktifkan checkbox
        menuJuz.classList.remove("hidden");
        menuSurah.classList.add("hidden");
    }

    audioPlayers.forEach((audio, index) => {
        audio.addEventListener("ended", function () {
            // Cari audio berikutnya
            const nextAudio = audioPlayers[index + 1];
            if (nextAudio) {
                nextAudio.play(); // Mainkan audio berikutnya
            }
        });
    });
});
