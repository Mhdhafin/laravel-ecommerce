// Ambil elemen audio
const audio = document.getElementById("myAudio");

// Fungsi untuk memutar audio
function playAudio() {
    audio.play();
}

// Ambil semua elemen tombol di halaman
const buttons = document.querySelectorAll("button");

// Tambahkan event listener ke setiap tombol
buttons.forEach((button) => {
    button.addEventListener("click", playAudio);
});
