var first, second, sum,fibo;
first = 0;
second = 1;
sum = 0;
fibo = []
for (let i = 0; i < 15; i++) { //for 15 fibonacci numbers
    if (i <= 1) 
    {
       fibo.push(i);
    } else 
    {
        sum = first + second; //sum of first and second number
        first = second; 
        second = sum;
        fibo.push(sum); // add to fibo array
    }
}
document.write("Fibonacci Series : ")
document.write(fibo); //write to webpage