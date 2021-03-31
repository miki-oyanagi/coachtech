const array = ["2020","2021"];

function isLeapYear(year){
  if((year % 4 === 0 && year % 100 !== 0) || year % 400 === 0){
    return true;
  }
  return false;
 }
let year=2020;
if(isLeapYear(year)){
  console.log(year+'年はうるう年');
}else{
  console.log(year+'年はうるう年ではない')
}
let year1=2021;
if(isLeapYear(year1)){
  console.log(year1+'年はうるう年');
}else{
  console.log(year1+'年はうるう年ではない')
}
