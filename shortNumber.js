const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Masukkan bilangan 5 digit: ", function(userInput) {

    if (userInput.length === 5 && /^\d+$/.test(userInput)) {
        var sortedNumber = userInput.split('').sort(function(a, b) {
            return b - a;
        }).join('');
        console.log("Urutan bilangan dari besar ke kecil: " + sortedNumber);
    } else {
        console.log("Input tidak valid. Harap masukkan bilangan 5 digit.");
    }


    rl.close();
});
