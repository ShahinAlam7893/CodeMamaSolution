
let myYear = parseInt(prompt());

if(myYear%4===0 && myYear%100 !== 0 || myYear%400 === 0){
    document.write(myYear+" is a leap year.");
}else{
    document.write(myYear+" is not a leap year.")
}