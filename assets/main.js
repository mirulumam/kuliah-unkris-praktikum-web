let mOnLoad = () => {
    if ( document.getElementById("pOnLoad") != undefined ) {
        document.getElementById("pOnLoad").innerText = "Memanggil JavaScript lewat onLoad";
    }
}
let latihanAlert = () => {
    alert("Ini merupakan pesan untuk Anda");
}
let showArithmetic = (n1, n2) => {
    let div = document.getElementById("divArithmetic");

    if ( div == undefined ) {
        return;
    }

    div.innerHTML = "<p>Perkalian\t: " + (n1 * n2) + "</p>"
        + "<p>Pembagian\t: " + (n1 / n2) + "</p>"
        + "<p>Penjumlahan\t: " + (n1 + n2) + "</p>"
        + "<p>Pengurangan\t: " + (n1 - n2) + "</p>"
        + "<p>Modulus\t: " + (n1 % n2) + "</p>"
    ;
}

let showBasicOperand = () => {
    let div = document.getElementById("divOperand");

    if ( div == undefined ) {
        return;
    }

    let v1 = window.prompt("Nilai 1: ");
    let v2 = window.prompt("Nilai 2: ");

    div.innerHTML = "<p>val1 == val2\t: " + (v1 == v2) + "</p>"
        + "<p>val1 != val2\t: " + (v1 != v2) + "</p>"
        + "<p>val1 > val2\t: " + (v1 > v2) + "</p>"
        + "<p>val1 < val2\t: " + (v1 < v2) + "</p>"
    ;
}

let showBasicCondition = () => {
    let div = document.getElementById("divCondition");

    if ( div == undefined ) {
        return;
    }

    let score = prompt("Nilai 0 - 100");
    if ( isNaN(score) ) {
        div.innerHTML = "Nilai tidak valid";
        return;
    }

    div.innerHTML = "Hasil: " + (parseInt(score) >= 60 ? "Lulus" : "Tidak lulus");
}

let showSwitchCondition = () => {
    let div = document.getElementById("divSwitch");

    if ( div == undefined ) {
        return;
    }

    let score = prompt("Input Nilai (1 - 5)");
    if ( isNaN(score) ) {
        div.innerHTML = "Nilai tidak valid";
        return;
    }

    let result = "";

    switch(score) {
        case "1":
            result = "satu"
        break

        case "2":
            result = "dua"
        break

        case "3":
            result = "tiga"
        break
        
        case "4":
            result = "empat"
        break

        case "5":
            result = "lima"
        break

        default:
            result = "lainnya"
    }

    div.innerHTML = "bilangan " + result;
}

let showForLoop = () => {
    let div = document.getElementById("divForLoop");

    if ( div == undefined ) {
        return;
    }

    let result = "";

    for ( let i = 0; i <= 10; i++ ) {
        result = result + i + "</br>";
    }

    div.innerHTML = result;
}

let showDoWhile = () => {
    let div = document.getElementById("divDoWhile");

    if ( div == undefined ) {
        return;
    }

    let i = 0;
    let result = "";

    do {
        result = result + i + "</br>";
        i++;
    } while (i <= 10);

    div.innerHTML = result;
}

let testFormInput = () => {
    let kirim = document.kirim;
    if ( kirim == undefined ) {
        return;
    }

    let div1 = document.kirim.T1;
    let div2 = document.kirim.T2;

    if ( div1 == undefined || div2 == undefined ) {
        return;
    }

    if ( isNaN(div1) || div1 == undefined || div1.length < 1 ) {
        div2.value = "Bilangan tidak valid";
    } else {
        div2.value = div1.value % 2 == 0 ? "bilangan genap" : "bilangan ganjil";
    }
}

let changeBg = (color) => {
    let div = document.getElementById("divChangeBgLg");

    if ( div == undefined ) {
        return;
    }

    div.style.backgroundColor = color;
}

let changeLg = (color) => {
    let div = document.getElementById("divChangeBgLg");

    if ( div == undefined ) {
        return;
    }

    div.style.color = color;
}