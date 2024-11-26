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

    audioPlayers.forEach((audioPlayer) => {
        audioPlayer.addEventListener("play", function () {
            const index = this.dataset.index;
            const verseElement = document.getElementById(`verse-${index}`);
            const arabicText = verseElement.querySelector(".verse-arabic");
            const transliteration = verseElement.querySelector(
                ".verse-transliteration"
            );

            if (verseElement) {
                // Fokus pada elemen yang sedang dibaca
                verseElement.scrollIntoView({
                    behavior: "smooth",
                    block: "center",
                });

                document.querySelectorAll(".verse-arabic").forEach((arabic) => {
                    if (arabic.classList.contains("text-amber-500")) {
                        arabic.classList.remove("text-amber-500");
                    }
                });

                document
                    .querySelectorAll(".verse-transliteration")
                    .forEach((tl) => {
                        if (tl.classList.contains("text-amber-500")) {
                            tl.classList.remove("text-amber-500");
                        }
                    });

                arabicText.classList.add("text-amber-500");
                transliteration.classList.add("text-amber-500");
            }
        });

        // Event untuk auto-play audio selanjutnya
        audioPlayer.addEventListener("ended", function () {
            const currentIndex = parseInt(this.dataset.index, 10);
            const nextIndex = currentIndex + 1;

            // Mulai audio selanjutnya jika ada
            const nextAudio = document.querySelector(
                `.audio-player[data-index="${nextIndex}"]`
            );
            if (nextAudio) {
                nextAudio.play();
            }
        });
    });
});
