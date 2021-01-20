const colors = ['red','yellow','black','green','pink','blue','brown','orange'];


document.getElementById('start').addEventListener('click',() =>
{
    setInterval(() => {
        var color = colors[Math.floor(Math.random()*8)];
        console.log(color);
        document.getElementById('box').style.backgroundColor = color;
    }, 500);
});