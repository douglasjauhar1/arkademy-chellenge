function is_name_valid(name) {
  // Huruf dari A sampai Z uppercase
  var uppercase = /[A-Z]/g;
  // huruf minbimal 3
  var batas = 3;
  // check panjang string dan memastikan karater yang ditemukan sama dengan panjang string
	if(name.length >= batas && name.match(uppercase).length == name.length) {
    	return true;
    }
    return false;
}
function is_age_valid(age){
    // deklarasi huruf 0-9
    var number = /[0-9]/g;
    // batas angka
    var batas = 2;
    //cek panjang number dan memastikan karakter harus berupa angka
    if(age.length == batas && age.match(number).length == age.length){
        return true;
    }
    return false;
}
function is_username_valid(username) {
    const nonLowercaseLetters = /[^a-z]/g;
  var empatHuruf=username.slice(0, 4)
   var tengah=username[4]
  //  console.log(username[username.length-1])
   var angka=username.slice(5,username.length)
     
   if(nonLowercaseLetters.test(empatHuruf)){
     return false
   }
   
   if(tengah =='_' ){
// no action
      
   }else if(tengah=='.'){
// no action
   }else{
     return false
   }
    
   if(angka.length>3){
     return false
   }
    
   return true
}

 console.log(is_name_valid('EDO') ? 'benar' : 'salah'); // benar
 console.log(is_name_valid('ED') ? 'benar' : 'salah'); // salah
 console.log(is_age_valid('18') ? 'benar' : 'salah'); // benar

console.log(is_username_valid('aaaa.123') ? 'benar' : 'salah'); // benar
