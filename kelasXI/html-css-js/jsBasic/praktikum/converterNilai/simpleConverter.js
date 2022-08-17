function convert() {

    const nilai = document.send.s1.value

    if (nilai >=93) {
        document.send.s2.value="Anda mendapat predikat : A"
    } else if (nilai >=83){
        document.send.s2.value="Anda mendapat predikat : B"
    } else if (nilai >=75) {
        document.send.s2.value="Anda mendapat predikat : C"
    } else if (nilai >=50) {
        document.send.s2.value="Anda mendapat predikat : D"
    } else if (nilai >=0){
        document.send.s2.value="Anda mendapat prediakt : E"
    } else {
        document.send.s2.value = "value tidak valid"
    }
}