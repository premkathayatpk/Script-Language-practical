var num=[10,15,18,12,50,20,28,33,45,48];
let max=num[0];
let min=num[0];
for(let i=0;i<10;i++){
    if(max<num[i]){
        max=num[i];
    }
    if(min>num[i]){
        min=num[i];
    }
}
document.write("Largest number is :"+max +"<br>");
    document.write("Smallest number is :"+min);