function nilai () {
    const nilai = prompt("nilai (0-100): ", 0)
            let hasil = " "
    
            if(nilai >= 60 ){
                hasil = "lulus"
            }
            else {
                hasil = "tidak lulus"
            }
            document.writeln("hasil :" +hasil)
}