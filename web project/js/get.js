//data
var data = [
    {
        username: "ahmad",
        password: "ahmad123",
        myBalance: 2000000
    },
    {
        username: "mohammed",
        password: "mohammed123",
        myBalance: 2000000 
    },
    {
        username: "slaiman",
        password: "slaiman123",
        myBalance: 2000000
    },
    {
        username: "user",
        password: "user",
        myBalance: 2000000
    }
];
//constants to be used:
var rasid=2000000;
var rate=90000;
var toPay=0;
//logging in
function login(){
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
 for(var i = 0 ; i< data.length;i++){
    if(username == data[i].username && password == data[i].password){
    document.getElementById("balance").value = parseInt(data[i].myBalance) + 'L.L' ;
    console.log(username +" " + "is logged in!")
    
    return}
    }
alert("wrong username or password!")
}
//buy cards
function get1(){
    var q=prompt("enter quantity");
    price = document.getElementById("p1");
    p=price.value * rate * q;
    toPay=toPay+p;
    price.value = p;
    if(rasid<toPay){
    alert("you dont have enough money to buy this voucher");
    toPay=toPay-price.value;}
}
function get2(){
    var q=prompt("enter quantity");
    price = document.getElementById("p2");
    p=price.value * rate * q;
    toPay=toPay+p;
    price.value = p;
    if(rasid<toPay){
    alert("you dont have enough money to buy this voucher");
    toPay=toPay-price.value;}
}
function get3(){
    var q=prompt("enter quantity");
    price = document.getElementById("p3");
    p=price.value * rate * q;
    toPay=toPay+p;
    price.value = p;
    if(rasid<toPay){
    alert("you dont have enough money to buy this voucher");
    toPay=toPay-price.value;}
}
function get4(){
    var q=prompt("enter quantity");
    price = document.getElementById("p4");
    p=price.value * rate * q;
    toPay=toPay+p;
    price.value = p;
    if(rasid<toPay){
    alert("you dont have enough money to buy this voucher");
    toPay=toPay-price.value;}
}
function get5(){
    var q=prompt("enter quantity");
    price = document.getElementById("p5");
    p=price.value * rate * q;
    toPay=toPay+p;
    price.value = p;
    if(rasid<toPay){
    alert("you dont have enough money to buy this voucher");
    toPay=toPay-price.value;}
}
function get6(){
    var q=prompt("enter quantity");
    price = document.getElementById("p6");
    p=price.value * rate * q;
    toPay=toPay+p;
    price.value = p;
    if(rasid<toPay){
    alert("you dont have enough money to buy this voucher");
    toPay=toPay-price.value;}
}
function get7(){
    var q=prompt("enter quantity");
    price = document.getElementById("p7");
    p=price.value * rate * q;
    toPay=toPay+p;
    price.value = p;
    if(rasid<toPay){
    alert("you dont have enough money to buy this voucher");
    toPay=toPay-price.value;}
}
//paying
function pay(){
if(toPay!=0 && confirm(`confirm paying: ${toPay} L.L`) && rasid!=0)
    rasid=rasid-toPay;
console.log(rasid);
}