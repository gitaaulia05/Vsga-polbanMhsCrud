var textDisplay = document.getElementById("type_text");
var greetings = ['THEMATIC' , 'WIRAUSAHA' , 'LEADERSHIP' , ];

var i = 0;
var j = 0;
var currentG = [];
var isDeleting = false;
function loop() {
      // PRINT  HASIL LOOPING DI VARIABLE TEXT DISPLAT DENGAN VALUE VARIABEL CURRENT G 
    textDisplay.innerHTML =  currentG.join(' ');

    if (i < greetings.length){
     
        if(!isDeleting && j <= greetings[i].length){ 
            currentG.push(greetings[i][j])
            j++
            // console.log("add a letter" , j);
        }
        
        if (isDeleting &&  j <= greetings[i].length){
            currentG.pop(greetings[i][j])
            j--
            // console.log("remove a letter" , j);
        }

        if(j == greetings[i].length){

            isDeleting = true
        }

         // JIKA LOOPING J SUDAH SAMPAI AKHIR (0) MOVING ON KE KATA KATA SELANJUTNYA
        if(isDeleting && j === 0 ) {
            currentG = []
            isDeleting = false
            i++
                // JIKA SUDAH LOOPING KATA KATA SAMPAI AKHIR LOOPING KEMBALI KATA KATA TERSEBUT DARI AWAL
            if(i == greetings.length) {
            
                i = 0
            }
        }
    }
    setTimeout(loop , 450);
}

loop();